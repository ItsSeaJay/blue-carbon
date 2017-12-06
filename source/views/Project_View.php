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

    public function output($title)
    {
      $project = $this->model->getProject($title);
      require_once $this->model->getTemplate();
    }
  }

?>
