<?php
  /**
   * View for the dashboard
   */
  class Dashboard_View
  {
    private $model;
    private $controller;

    function __construct($model, $controller)
    {
      $this->model = $model;
      $this->controller = $controller;
    }

    public function output()
    {
      $projects = $this->model->get_projects();

      if (isset($_GET['title']))
      {
        $project = $this->model->get_project($_GET['title']);
      }

      require_once $this->model->get_template();
    }
  }

?>
