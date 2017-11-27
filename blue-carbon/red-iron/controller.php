<?php
  require_once 'model.php';

  class Controller
  {
    private $model;

    function __construct()
    {
      $this->model = new Model();
      $this->invoke();
    }

    private function invoke()
    {
      
    }
  }
?>
