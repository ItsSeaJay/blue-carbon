<?php
  require_once '../red-iron/database.php';
  require_once '../entities/project.php';

  class Project_Model
  {
    function __construct() {}

    public function getProjects()
    {
      $query = 'SELECT * FROM projects';
      $statement = $database->prepared_statement($query, array());

      $projects = array();

      while ($row = $statement->fetchObject())
      {
        array_push
        (
          $projects,
          $row->id => new Project
          (
            $row->id,
            $row->title,
            $row->category,
            $row->description,
            $row->release_date,
            $row->thumbnail
          )
        );
      }

      print_r($projects);

      return $projects;
    }
  }
?>
