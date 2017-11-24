<?php

  $query = 'SELECT * FROM projects WHERE name LIKE ?';
  $searchTerm = '';
  $statement = $database->prepared_statement($query, array('%'. $searchTerm .'%'));

  while ($row = $statement->fetchObject())
  {
    echo '<div class="col-lg-4 thumbnail text-center">';
    echo '<img src="http://via.placeholder.com/640x480" alt="Lorem Pixel">';
    echo '<h1>' . $row->name . '</h1>';
    echo '<small>Release Date</small>';
    echo '</div>';
  }

?>
