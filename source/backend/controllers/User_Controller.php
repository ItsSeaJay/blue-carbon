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
      if (isset($_POST))
      {
        if (isset($_POST['username']) && isset($_POST['password']))
        {
          $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING) ?? '';
          $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING) ?? '';
          $response = array(
            'success' => false,
            'message' => 'Error: undefined'
          );

          if ($username != '' && $password != '')
          {
            $user = $user_model->get_user($username);

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
          else
          {
            $response['success'] = false;
            $response['message'] = 'Error: Credentials are undefined';
          }
        }

        echo json_encode($response);
      }
    }
  }

?>
