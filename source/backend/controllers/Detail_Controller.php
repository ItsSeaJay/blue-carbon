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
        'message' => 'Unspecified error'
      );

      if (isset($_POST))
      {
        $query = "INSERT INTO `details` (`id`, `header`, `detail`, `project`)" .
          " VALUES (NULL, '', '', ?)";

        $statement = $GLOBALS['database']->prepared_statement($query, array($_POST['id']));

        $response['success'] = true;
        $response['message'] = 'Detail added to project ' . $_POST['id'];
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

      if (isset($_POST)) {
        $query = "DELETE FROM `details` WHERE `details`.`id` = ?";
        $statement = $GLOBALS['database']->prepared_statement($query, array($_POST['id']));

        $response['success'] = true;
        $response['message'] = 'Successfully removed detail ' . $_POST['id'];
      } else {
        $response['success'] = false;
        $response['message'] = '$_POST Superglobal unset';
      }

      $json = json_encode($response);
      echo $json;
    }

    public function update_details($project)
    {

    }
  }
?>
