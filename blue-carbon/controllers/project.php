<?php
  require_once 'red-iron/database.php';
  require_once 'models/project.php';

  class Project_Controller
  {
    private $model;

    function __construct()
    {
      $this->model = new Project_Model();
      $this->invoke();
    }

    private function invoke()
    {
      $projects = $this->model->getProjects();
      include 'views/portfolio.php';
    }
  }

  $controller = new Project_Controller();
?>
