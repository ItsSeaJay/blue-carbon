<?php
  require_once '../../libraries/red-iron/red-iron/database.php';

  $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING) ?? 'No username posted.';
  $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING) ?? 'No password posted.';
  $response = array();

  $query = 'SELECT * FROM `users` WHERE `username` = ?';

  if ($statement = $GLOBALS['database']->prepared_statement($query, $username))
  {
    $user = $statement->fetchObject();
    
    if ($username === $user->username && password_verify($password, $))
    {
      $response['success'] = true;
      $response['message'] = 'Successfully authenticated';
    }
    else
    {
      $response['success'] = false;
      $response['message'] = 'Successfully authenticated';
    }
  }

  echo json_encode($response);
?>
