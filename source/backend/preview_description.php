<?php
  require_once '../../libraries/parsedown/parsedown.php';

  $parsedown = new Parsedown();

  if (isset($_POST)) {
    echo $parsedown->text($_POST['description']) ?? 'undefined';
  }
?>
