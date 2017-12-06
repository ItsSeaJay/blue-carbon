<?php
  require_once 'models/Project_Model.php';
  require_once 'views/Project_View.php';

  $model = new Project_Model();
  $controller = 'test';
  $view = new Project_View($model, $controller);

  $view->output(1);
?>
