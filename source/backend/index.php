<?php
  require_once 'models/User_Model.php';
  require_once 'views/User_View.php';

  $user_template = 'templates/login.php';
  $user_model = new User_Model($user_template);
  $user_controller = 'test';
  $user_view = new User_View($user_model, $user_controller);

  $user_view->output_single('root');
?>
