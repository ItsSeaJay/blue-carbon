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

    public function get_template()
    {
      return $this->template;
    }

    public function get_single_project($title)
    {
      $query = "SELECT * FROM projects WHERE `title` = ?";
      $statement = $GLOBALS['database']->prepared_statement($query, array($title));

      return $statement->fetchObject();
    }

    public function get_all_projects()
    {
      $query = "SELECT * FROM projects ORDER BY initiative DESC";
      $statement = $GLOBALS['database']->prepared_statement($query, array());

      return $statement->fetchAll();
    }
  }
?>
