<?php
  require_once 'include_only.php';

  function redirect($path)
  {
    header('Location: ' . $path);
    exit();
  }
?>
