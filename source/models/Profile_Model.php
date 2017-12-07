<?php
  /**
   * Gives access to details like the programmer's name
   */
  class Profile_Model
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

    public function get_first_name()
    {
      $query = "SELECT first_name FROM profile";
      $statement = $GLOBALS['database'];

      return $statement->fetchObject();
    }

    public function get_last_name()
    {
      $query = "SELECT last_name FROM profile";
      $statement = $GLOBALS['database'];

      return $statement->fetchObject();
    }

    public function get_full_name()
    {
      $query = "SELECT * FROM profile";
      $statement = $GLOBALS['database']->prepared_statement($query, array());

      $profile = $statement->fetchObject();

      $full_name = $profile->first_name . ' ' . $profile->last_name;

      return $full_name;
    }
  }

?>
