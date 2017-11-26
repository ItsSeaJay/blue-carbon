<?php

  $query = 'SELECT * FROM projects WHERE title LIKE ?';
  $searchTerm = '';
  $statement = $database->prepared_statement($query, array('%'. $searchTerm .'%'));

  while ($row = $statement->fetchObject())
  {
    echo '<div class="col-lg-4 thumbnail text-center">';
    echo '<img src="' . $row->thumbnail . '" alt="'. $row->title . '">';
    echo '<h1>' . $row->title . '</h1>';
    echo '</div>';
  }

?>
