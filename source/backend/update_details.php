<?php
  require_once 'models/Detail_Model.php';
  require_once 'views/Detail_View.php';
  require_once 'controllers/Detail_Controller.php';

  $detail_template = 'templates/blank.html';
  $detail_model = new Detail_Model($detail_template);
  $detail_controller = new Detail_Controller($detail_model);
  $detail_view = new Detail_View($detail_model, $detail_controller);

  $detail_controller->update_details();
?>
