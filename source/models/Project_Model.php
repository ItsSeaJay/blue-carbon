<?php
  require_once '../libraries/red-iron/red-iron/database.php';

  /**
   * Gives access to individual projects
   */
  class Project_Model
  {
    private $template;

    public function __construct($template)
    {
      $this->template = $template;
    }

    public function getTemplate()
    {
      return $this->template;
    }

    public function getProject($title)
    {
      $query = "SELECT * FROM projects WHERE `title` = ?";
      $statement = $GLOBALS['database']->prepared_statement($query, array($title));

      return $statement->fetchObject();
    }
  }
?>
