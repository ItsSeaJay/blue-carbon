<?php
  require_once '../controllers/project.php';

  $query = 'SELECT * FROM projects WHERE title LIKE ?';
  $searchTerm = '';
  $statement = $database->prepared_statement($query, array('%'. $searchTerm .'%'));

  foreach ( as $project)
  {
    # code...
  }
?>
