<?php
  require_once '../../libraries/red-iron/red-iron/database.php';

  if (isset($_POST))
  {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING) ?? 'No username posted.';
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING) ?? 'No password posted.';
    $response = array(
      'success' => false,
      'message' => 'Error: undefined'
    );

    $query = 'SELECT * FROM `users` WHERE `username` = ?';

    // This if statement sets the $statement variable if true
    if ($statement = $GLOBALS['database']->prepared_statement($query, array($username)))
    {
      $user = $statement->fetchObject();

      if ($username === $user->username && password_verify($password, $user->password))
      {
        $response['success'] = true;
        $response['message'] = 'Successfully authenticated';
      }
      else
      {
        $response['success'] = false;
        $response['message'] = 'Error: Login attempt failed';
      }
    }

    echo json_encode($response);
  }
?>
