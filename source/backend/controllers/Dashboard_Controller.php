<?php
  require_once '../../libraries/red-iron/red-iron/database.php';
  require_once '../../libraries/htmlpurifier/library/HTMLPurifier.auto.php';

  /**
   * Controller for the dashboard
   */
  class Dashboard_Controller
  {
    private $model;
    private $config;
    private $purifier;

    function __construct($model)
    {
      $this->model = $model;
      $this->config = HTMLPurifier_Config::createDefault() ?? null;
      $this->purifier = new HTMLPurifier($this->config) ?? null;
    }

    public function new_project()
    {
      $response = array(
        'success' => false,
        'message' => 'Unspecified error',
        'total' => 0
      );

      if (isset($_POST))
      {
        if (isset($_POST['title']) && isset($_POST['subtitle']))
        {
          $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
          $subtitle = filter_var($_POST['subtitle'], FILTER_SANITIZE_STRING);

          // First, check if the project with the entered title exists
          $query = "SELECT COUNT(*) AS `total` FROM `projects` WHERE title = ?";
          $statement = $GLOBALS['database']->prepared_statement($query, array($title));
          $project = $statement->fetchObject();

          // If it doesn't, then we can continue to create it
          if ($project->total == 0)
          {
            $query = "INSERT INTO `projects` (`title`, `subtitle`, " .
              "`initiative`, `description`, `thumbnail`) VALUES " .
              "(?, ?, '0', 'No description provided.', " .
              "'http://via.placeholder.com/640x480');";

            $GLOBALS['database']->prepared_statement($query, array($title, $subtitle));

            $response['success'] = true;
            $response['message'] = 'Database record inserted successfully';
            $response['total'] = $project->total;
          }
          else
          {
            $response['success'] = false;
            $response['message'] = 'A project with that title already exists';
          }
        }
        else
        {
          $response['success'] = false;
          $response['message'] = 'Title and subtitle have not been posted';
        }
      }
      else
      {
        $response['success'] = false;
        $response['message'] = '$_POST superglobal unset';
      }

      // Send back the AJAX response to Javascript regardless of what happened
      $json = json_encode($response);
      echo $json;
    }

    public function edit_project()
    {
      $query = 'UPDATE `projects` SET `title` = ?, `subtitle` = ?, `description` = ? WHERE `id` = ?';

      if (isset($_POST))
      {
        $clean_description = $this->purifier->purify($_POST['description']) ?? 'null';

        $data = array(
          filter_var($_POST['title'], FILTER_SANITIZE_STRING),
          filter_var($_POST['subtitle'], FILTER_SANITIZE_STRING),
          $clean_description, // Filtered by HTML purifier
          $_POST['id'] // We don't filter this, because the user doesn't input it
        );

        $GLOBALS['database']->prepared_statement($query, $data);
      }
    }

    public function delete_project()
    {
      $response = array(
        'success' => false,
        'message' => 'Unspecified error'
      );

      if (isset($_POST)) {
        if (isset($_POST['title'])) {
          $title = $_POST['title'];

          // Check if the project we're trying to delete matches one in the database
          $query = "SELECT COUNT(*) AS `total` FROM projects WHERE title = ?";
          $statement = $GLOBALS['database']->prepared_statement($query, array($title));
          $project = $statement->fetchObject();

          if ($project->total > 0) {
            $query = 'DELETE FROM `projects` WHERE `projects`.`title` = ?';
            $GLOBALS['database']->prepared_statement($query, array($title));

            $response['success'] = true;
            $response['message'] = 'Project deleted successfully!';
          } else {
            $response['success'] = false;
            $response['message'] = 'No such project exists.';
          }
        }
      }

      // Send back the AJAX response to Javascript regardless of what happened
      $json = json_encode($response);
      echo $json;
    }
  }
?>
