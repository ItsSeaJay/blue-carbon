<?php
  /**
   * User_View is used for the login screen
   */
  class User_View
  {
    private $model;
    private $controller;

    function __construct($model, $controller)
    {
      $this->model = $model;
      $this->controller = $controller;
    }

    public function output_single($username)
    {
      $user = $this->model->get_user($username);

      require_once $this->model->get_template();
    }
  }
?>
