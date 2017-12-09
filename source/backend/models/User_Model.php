<?php
  require_once '../../libraries/red-iron/red-iron/database.php';

  /**
   * User_Model retrieves data for an individual user
   */
  class User_Model
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

    public function get_user($username)
    {
      $query = 'SELECT * FROM users WHERE username = ?';
      $statement = $GLOBALS['database']->prepared_statement($query, array($username));

      return $statement->fetchObject();
    }
  }

?>
