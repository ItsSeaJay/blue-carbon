<?php
  require_once 'frontend/models/Project_Model.php';
  require_once 'frontend/views/Project_View.php';

  $portfolio_template = 'frontend/templates/portfolio.php';
  $portfolio_model = new Project_Model($portfolio_template);
  $portfolio_controller = 'test';
  $portfolio_view = new Project_View($portfolio_model, $portfolio_controller);

  $portfolio_view->output_all();
?>
