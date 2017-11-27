<?php
  class Project
  {
    private $id;
    private $title;
    private $category;
    private $description;
    private $release_date;
    private $thumbnail;

    function __construct($id, $title, $category, $description, $release_date, $thumbnail)
    {
      $this->id = $id;
      $this->title = $title;
      $this->category = $category;
      $this->description = $description;
      $this->release_date = $release_date;
      $this->thumbnail = $thumbnail;
    }

    public function get_id()
    {
      return $this->id;
    }

    public function get_title()
    {
      return $this->title;
    }

    public function get_category()
    {
      return $this->category;
    }

    public function get_description()
    {
      return $this->description;
    }

    public function get_release_date()
    {
      return $this->description;
    }

    public function get_thumbnail()
    {
      return $this->thumbnail;
    }
  }

?>
