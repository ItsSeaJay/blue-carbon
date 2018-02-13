<?php
  require_once 'redirect.php';

  if (count(get_included_files()) <= 3)
  {
    redirect('index.php');

    exit();
  }
?>
