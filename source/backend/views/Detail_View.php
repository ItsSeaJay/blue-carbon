<?php
  /**
   * Used to display details
   */
  class Detail_View
  {
    private $model;
    private $controller;

    function __construct($model, $controller)
    {
      $this->model = $model;
      $this->controller = $controller;
    }

    public function echo_details($project)
    {
      $details = $this->model->get_details($project);

      foreach ($details as $detail)
      {
        echo '<div class="row">';
        echo '<div class="col-auto">';
        echo '<div class="input-group">';

        // Detail Header
        echo '<input class="form-control"';
        echo ' style="font-weight: bold;"';
        echo ' type=text';
        echo ' placeholder="header"';
        echo ' value=';
        echo $detail['header'];
        echo '>';
        echo '</input>';

        echo '</div>';
        echo '<div class="col">';

        // Detail Content
        echo '<input class="form-control" type=text placeholder="header"';
        echo ' value="';
        echo $detail['detail'];
        echo '">';
        echo '</input>';

        echo '</div>';
        echo '</div>';
        echo '</div>';
      }
    }
  }

?>
