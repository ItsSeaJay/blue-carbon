<?php
  require_once 'models/portfolio.php';

  class Portfolio_Controller
  {
    private $model;

    function __construct()
    {
      $this->model = new Portfolio_Model();
      $this->invoke();
    }

    private function invoke($value='')
    {
      include 'view/portfolio.php';
    }
  }
?>
