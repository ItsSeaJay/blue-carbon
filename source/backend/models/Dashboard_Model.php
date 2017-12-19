<?php
  require_once '../../libraries/red-iron/red-iron/database.php';

  /**
   * Used for managing projects and other meta data
   */
  class Dashboard_Model
  {
    private $template;

    function __construct($template)
    {
      $this->template = $template;
    }

    public function get_template()
    {
      return $this->template;
    }

    public function get_projects()
    {
      $query = "SELECT * FROM projects";
      $statement = $GLOBALS['database']->prepared_statement($query, array());

      return $statement->fetchAll();
    }
  }

?>
