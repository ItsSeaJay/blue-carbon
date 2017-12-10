<?php
  /**
   * User Controller is used to log in/out
   */
  class User_Controller
  {
    private $model;

    function __construct($model)
    {
      $this->model = $model;
    }

    public function get_model()
    {
      return $this->model;
    }

    public function login()
    {
      $response = array(
        'success' => false,
        'message' => 'Error: no values were posted'
      );
      if (isset($_POST))
      {
        if (isset($_POST['username']) && isset($_POST['password']))
        {
          $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING) ?? '';
          $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING) ?? '';

          if ($username != '' && $password != '')
          {
            $user = $this->model->get_user($username);

            if ($username === $user->username && password_verify($password, $user->password))
            {
              $response['success'] = true;
              $response['message'] = 'Alert: Successfully authenticated';
            }
            else
            {
              $response['success'] = false;
              $response['message'] = 'Error: Login attempt failed';
            }
          }
        }
      }
      echo json_encode($response);
    }
  }

?>
