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
            'message' => 'Error: no values were posted'
          );

          if ($username != '' && $password != '')
          {
            if ($user = $this->model->get_user($username))
            {
              if (password_verify($password, $user->password))
              {
                $response['success'] = true;
                $response['message'] = 'Alert: Successfully authenticated';

                // Configure the PHP session
                session_start();
                $_SESSION['login'] = $user->id;
              }
              else
              {
                $response['success'] = false;
                $response['message'] = 'Error: Invalid credentials';
              }
            }
            else
            {
              $response['success'] = false;
              $response['message'] = 'Error: Login attempt failed';
            }
          }
        }
        echo json_encode($response) ?? '';
      }
    }

    public function logout()
    {
      session_start();
      unset($_SESSION['login']);
      session_destroy();
      header('Location: index.php');
    }
  }

?>
