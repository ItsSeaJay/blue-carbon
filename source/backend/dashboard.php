<?php
  require_once 'templates/dashboard.php';

  session_start();
  echo $_SESSION['login'] ?? 'No session stored';
  echo '<a href="logout.php">Logout</a>';
?>
