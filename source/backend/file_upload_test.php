<?php
  require_once 'models/Dashboard_Model.php';
  require_once 'controllers/Dashboard_Controller.php';

  $template = 'templates/file_upload.php';
  $dashboard_model = new Dashboard_Model($template);
  $dashboard_controller = new Dashboard_Controller($dashboard_model);

  $dashboard_controller->edit_project();
?>
