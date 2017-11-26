<?php
  require_once '../red-iron/database.php';
  require_once '../models/project.php';

  class Project_Controller
  {
    public $project_model;

    function __construct()
    {
      $this->model = new Project_Model();
    }
  }

?>
