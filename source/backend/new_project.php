<?php
  require_once 'models/Dashboard_Model.php';
  require_once 'views/Dashboard_View.php';
  require_once 'controllers/Dashboard_Controller.php';

  $dashboard_template = 'templates/dashboard.php';
  $dashboard_model = new Dashboard_Model($dashboard_template);
  $dashboard_controller = new Dashboard_Controller($dashboard_model);

  $dashboard_controller->new_project();
?>
