<?php
  class Project
  {
    public $id;
    public $title;
    public $category;
    public $description;
    public $release_date;
    public $thumbnail;

    function __construct($id, $title, $category, $description, $release_date, $thumbnail)
    {
      $this->id = $id;
      $this->title = $title;
      $this->category = $category;
      $this->description = $description;
      $this->release_date = $release_date;
      $this->thumbnail = $thumbnail;
    }
  }

?>
