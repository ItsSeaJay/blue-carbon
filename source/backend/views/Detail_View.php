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

      echo '<div id="details">';

      // New project Button
      echo '<a class="btn btn-success" role="button" href="">';
      echo '<span class="oi oi-plus">';
      echo '</span>';
      echo '&nbsp;';
      echo 'Add Detail';
      echo '</a>';

      foreach ($details as $detail)
      {
        echo '<hr>';

        echo '<div class="row">';

        // Delete button
        echo '<a href="">';
        echo '<span class="oi oi-x"></span>';
        echo '</a>';

        echo '<div class="col">';
        echo '<div class="input-group">';

        // Header Field Icon
        echo '<div class="input-group-addon">';
        echo '<span class="oi oi-header">';
        echo '</span>';
        echo '</div>';

        // Detail Header
        echo '<input class="form-control" ';
        echo 'style="font-weight: bold;" ';
        echo 'type="text" ';
        echo 'placeholder="header" ';
        echo 'value="';
        echo $detail['header'];
        echo '">';
        echo '</input>';

        echo '</div>';
        echo '</div>';

        echo '<div class="col">';
        echo '<div class="input-group">';

        // Content Field Icon
        echo '<div class="input-group-addon">';
        echo '<span class="oi oi-ellipses"></span>';
        echo '</div>';

        // Detail Content
        echo '<input class="form-control" type=text placeholder="header"';
        echo ' value="';
        echo $detail['detail'];
        echo '">';
        echo '</input>';

        echo '</div>';
        echo '</div>';
      }
    }
  }

?>
