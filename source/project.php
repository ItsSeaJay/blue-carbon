<?php
  require_once 'frontend/models/Project_Model.php';
  require_once 'frontend/views/Project_View.php';

  $template = 'frontend/templates/project.php';
  $model = new Project_Model($template);
  $controller = 'test';
  $view = new Project_View($model, $controller);

  $view->output_single($_GET['title']);
?>
