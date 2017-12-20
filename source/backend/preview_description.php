<?php
  require_once '../../libraries/parsedown/parsedown.php';
  require_once '../../libraries/htmlpurifier/library/HTMLPurifier.auto.php';

  $parsedown = new Parsedown();

  $config = HTMLPurifier_Config::createDefault();
  $purifier = new HTMLPurifier($config);

  if (isset($_POST))
  {
    $clean_html = $purifier->purify($_POST['description']) ?? 'undefined';
    echo $parsedown->text($clean_html);
  }
?>
