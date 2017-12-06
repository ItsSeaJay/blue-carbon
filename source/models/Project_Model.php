<?php
  require_once '../libraries/red-iron/red-iron/database.php';

  /**
   * Gives access to individual projects
   */
  class Project_Model
  {
    public $template;

    public function __construct()
    {
      $this->template = 'templates/project.php';
    }

    public function getProject($id)
    {
      $query = "SELECT * FROM projects WHERE `title` = ?";
      $statement = $GLOBALS['database']->prepared_statement($query, array($id));

      return $statement->fetchObject();
    }
  }
?>
