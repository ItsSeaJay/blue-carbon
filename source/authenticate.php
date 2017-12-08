<?php
  require_once '../redirect.php';

  if (isset($_SESSION['authenticated']))
  {
    if (!$_SESSION['authenticated'])
    {
      redirect('index.php');
    }
  }
  else
  {
    redirect('index.php');
  }
?>
