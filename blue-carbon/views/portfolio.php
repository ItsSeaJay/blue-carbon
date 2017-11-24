<?php

  $query = 'SELECT * FROM projects';
  $statement = $database->prepared_statement($query, array());

  while ($row = $statement->fetchObject())
  {
    echo '<div class="col-lg-4 thumbnail">';
    echo '<h1>' . $row->name . '</h1>';
    echo '</div>';
  }

?>
