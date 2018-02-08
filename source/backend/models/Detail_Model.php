<?php
  require_once '../../libraries/red-iron/red-iron/database.php';

  /**
   * Gets details for a project
   */
  class Detail_Model
  {
    private $template

    function __construct($template)
    {
      $this->template = $template;
    }

    public function get_template()
    {
      return $this->template();
    }

    public function get_details()
    {
      $query = 'SELECT * FROM `details`';
      $statement = $GLOBALS['database']->prepared_statement($query, array());

      return $statement->fetchAll();
    }
  }
?>
