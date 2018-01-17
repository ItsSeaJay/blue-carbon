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
        'message' => 'Unspecified error'
      );

      if (isset($_POST))
      {
        $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
        $subtitle = filter_var($_POST['subtitle'], FILTER_SANITIZE_STRING);

        // Check that the project does not already exist
        $query = "SELECT `title` FROM `projects` WHERE `title` = ?";
        $statement = $GLOBALS['database']->prepared_statement($query, array($title));
        $row = $statement->fetchObject() ?? '';

        if ($row != null && $row != '') {
          $query = "INSERT INTO `projects` (`id`, `title`, `subtitle`, `initiative`, `description`, `thumbnail`) VALUES (NULL, ?, ?, 'No description provided', '', 'http://via.placeholder.com/640x480')";

          $GLOBALS['database']->prepared_statement($query, array($title, $subtitle));
        } else {
          // That project already exists in the database
          $response['success'] = false;
          $response['message'] = 'Error: entered title already exists.';
        }
      }

      // Send back the AJAX response to Javascript
      echo json_encode($response) ?? '';
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
  }
?>
