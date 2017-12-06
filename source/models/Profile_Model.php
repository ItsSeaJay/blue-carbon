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

    public function get_first_name($value='')
    {
      # code...
    }
  }

?>
