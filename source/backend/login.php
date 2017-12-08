<?php
  require_once '../../libraries/red-iron/red-iron/database.php';

  $username = $_POST['username'] ?? null;
  $password = $_POST['password'] ?? null;

  echo 'Username: ' . $username;
  echo 'Password: ' . $password;
?>
