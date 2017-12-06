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

    public function getTemplate()
    {
      return $this->template;
    }
  }

?>
