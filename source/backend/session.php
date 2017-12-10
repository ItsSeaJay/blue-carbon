<?php
  session_start();

  if (isset($_SESSION['login']))
  {
    // Let
  }
  else
  {
    header('Location: index.php');
    exit();
  }
?>
