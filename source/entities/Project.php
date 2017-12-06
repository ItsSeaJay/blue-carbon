<?php
  /**
   * Represents an individual project record in the database
   */
  class Project
  {
    public $id;
    public $title;
    public $category;
    public $description;
    public $release_date;
    public $thumbnail;

    function __construct()
    {
      # code...
    }
  }

?>
