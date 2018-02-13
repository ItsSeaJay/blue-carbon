<?php
  require_once '../../libraries/red-iron/red-iron/database.php';

  /**
   * Updates, creates and deletes project details
   */
  class Detail_Controller
  {
    private $model;

    function __construct($model)
    {
      $this->model = $model;
    }

    public function get_model($model)
    {
      return $this->model;
    }

    public function add_detail()
    {
      $response = array(
        'success' => false,
        'message' => 'Unspecified error',
        'id' => 0
      );

      if (isset($_POST))
      {
        // Add a new, blank detail into the database
        $query = "INSERT INTO `details` (`id`, `header`, `detail`, `project`)" .
          " VALUES (NULL, '', '', ?)";
        $statement = $GLOBALS['database']->prepared_statement($query, array($_POST['id']));

        $response['success'] = true;
        $response['message'] = 'Detail added to project ' . $_POST['id'];
        $response['id'] = $GLOBALS['database']->get_PDO()->lastInsertID();
      }
      else
      {
        $response['success'] = false;
        $response['message'] = '$_POST Superglobal unset';
      }

      $json = json_encode($response);
      echo $json;
    }

    public function remove_detail()
    {
      $response = array(
        'success' => false,
        'message' => 'Unspecified error'
      );

      if (isset($_POST))
      {
        if (isset($_POST['id']))
        {
          $query = "DELETE FROM `details` WHERE `details`.`id` = ?";
          $statement = $GLOBALS['database']->prepared_statement($query, array($_POST['id']));

          $response['success'] = true;
          $response['message'] = 'Successfully removed detail ' . $_POST['id'];
        }
        else
        {
          $response['success'] = false;
          $response['message'] = 'Detail ID was not sent';
        }
      }
      else
      {
        $response['success'] = false;
        $response['message'] = '$_POST Superglobal unset';
      }

      $json = json_encode($response);
      echo $json;
    }

    public function update_detail()
    {
      $response = array(
        'success' => false,
        'message' => 'Unspecified error'
      );

      if (isset($_POST))
      {
        $query = "UPDATE `details` SET `header` = ?, `detail` = ? WHERE `id` = ?";

        $data = array(
          filter_var($_POST['header'], FILTER_SANITIZE_STRING),
          filter_var($_POST['content'], FILTER_SANITIZE_STRING),
          $_POST['id']
        );

        $statement = $GLOBALS['database']->prepared_statement($query, $data);

        $response['success'] = true;
        $response['message'] = 'Updated detail ' . $_POST['id'];
      }
      else
      {
        $response['success'] = false;
        $response['message'] = '$_POST Superglobal unset';
      }

      $json = json_encode($response);
      echo $json;
    }
  }
?>
