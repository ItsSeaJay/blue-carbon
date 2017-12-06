<?php
  require_once 'models/Project_Model.php';
  require_once 'views/Project_View.php';

  $template = 'templates/project.php';
  $model = new Project_Model($template);
  $controller = 'test';
  $view = new Project_View($model, $controller);

  $view->output("Super Mario: Odyssey");
?>
