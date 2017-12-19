<?php
  require_once 'session.php';
  require_once 'models/Dashboard_Model.php';
  require_once 'views/Dashboard_View.php';
  require_once 'controllers/Dashboard_Controller.php';

  $dashboard_template = 'templates/edit.php';
  $dashboard_model = new Dashboard_Model($dashboard_template);
  $dashboard_controller = new Dashboard_Controller($dashboard_model);
  $dashboard_view = new Dashboard_View($dashboard_model, $dashboard_controller);

  $dashboard_view->output();
?>
