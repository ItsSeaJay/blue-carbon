<?php
  require_once '../libraries/red-iron/red-iron/database.php';

  /**
   * Gives access to individual projects
   */
  class Project_Model
  {
    public function __construct() {

    }

    public function getProject($id)
    {
      $query = "SELECT * FROM projects WHERE id = ?";
      $statement = $database->prepared_statement($query, array($id));

      return $statement->fetchObject();
    }
  }

  $query = 'SELECT * FROM `projects`';
  $statement = $database->prepared_statement($query, array());

  while ($row = $statement->fetchObject()) {
    echo $row->id;
  }
?>
