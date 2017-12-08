<?php
  /**
   * Project View outputs information about a project
   */
  class Project_View
  {
    private $model;
    private $controller;

    function __construct($model, $controller)
    {
      $this->controller = $controller;
      $this->model = $model;
    }

    public function output_single($title)
    {
      $project = $this->model->get_single_project($title);

      require_once $this->model->get_template();
    }

    public function output_all()
    {
      $projects = $this->model->get_all_projects();

      require_once $this->model->get_template();
    }
  }

?>
