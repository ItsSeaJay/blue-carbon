<?php
  require_once '../redirect.php';

  if (isset($_SESSION['authenticated']))
  {
    if ($_SESSION['authenticated'] == false)
    {
      redirect('index.php');
    }
  }
  else
  {
    redirect('index.php');
  }
?>
