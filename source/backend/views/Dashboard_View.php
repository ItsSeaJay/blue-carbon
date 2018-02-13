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

    public function echo_project_sortable()
    {
      // Output existing projects
      foreach ($projects as $project)
      {
        // Single thumbnail
        echo '<li class="alert alert-dark">';
        echo $project['title'];
        echo '<div class="float-right">';

        // Edit Button
        echo '<a class="btn btn-sm btn-primary" href="edit.php?title=';
        echo urlencode($project['title']);
        echo '" role="button">';
        echo '<span class="oi oi-pencil"></span>';
        echo '&nbsp;';
        echo 'Edit';
        echo '</a>';

        echo '&nbsp;';

        // Delete button
        echo '<button class="btn btn-sm btn-danger">';
        echo '<span class="oi oi-trash"></span>';
        echo '&nbsp;';
        echo 'Delete';
        echo '</button>';
        echo '</div>';
        echo '</li>';
      }
    }
  }

?>
