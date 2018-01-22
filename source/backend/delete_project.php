<?php
  require_once 'models/Dashboard_Model.php';
  require_once 'controllers/Dashboard_Controller.php';

  $template = 'blank.html';
  $dashboard_model = new Dashboard_Model($template);
  $dashboard_controller = new Dashboard_Controller($dashboard_model);

  $dashboard_controller->delete_project();

  header('Location: dashboard.php');
  exit();
?>
