<?php
  require_once '../../libraries/red-iron/red-iron/database.php';
  require_once 'controller/User_Controller.php';

  $user_template = 'templates/login_form.php';
  $user_model = new User_Model($);
  $user_controller = new User_Controller($user_model);


?>
