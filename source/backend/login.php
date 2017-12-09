<?php
  require_once '../../libraries/red-iron/red-iron/database.php';

  $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING) ?? 'No username posted.';
  $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING) ?? 'No password posted.';

  echo $username . '&nbsp;' . $password;
?>
