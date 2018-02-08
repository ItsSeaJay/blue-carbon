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

    public function update_details($project)
    {
      
    }
  }
?>
