<?php
  require_once '../../libraries/red-iron/red-iron/database.php';

  /**
   * Controller for the dashboard
   */
  class Dashboard_Controller
  {
    private $model;

    function __construct($model)
    {
      $this->model = $model;
    }

    public function new_project()
    {
      $query = "INSERT INTO `projects` (`id`, `title`, `subtitle`, `initiative`, `description`, `thumbnail`) VALUES (NULL, 'Untitled', 'Unsubtitled', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'http://via.placeholder.com/640x480');";

      $GLOBALS['database']->prepared_statement($query, array());
    }
  }

?>
