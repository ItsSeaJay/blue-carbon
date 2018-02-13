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
        // Starting tags
        echo '<div class="row row-detail" data-id="';
        echo $detail['id'];
        echo '">';

        echo '<a class="btn-delete-detail" role="button" href="">';
        echo '<span class="oi oi-x"></span>';
        echo '</a>';

        // Header divs start
        echo '<div class="col-auto">';
        echo '<div class="form-group">';
        echo '<div class="input-group">';

        // Header Addon
        echo '<div class="input-group-addon">';
        echo '<span class="oi oi-header"></span>';
        echo '</div>';

        // Header input
        echo '<input ';
        echo 'style="font-weight: bold;" ';
        echo 'class="form-control input-detail-header" ';
        echo 'name="';
        echo 'header-' . $detail['id'];
        echo '" ';
        echo 'type="text" ';
        echo 'value="';
        echo $detail['header'];
        echo '" ';
        echo 'placeholder="Header">';
        echo '</input>';

        // Header divs end
        echo '</div>';
        echo '</div>';
        echo '</div>';

        // Content divs start
        echo '<div class="col">';

        echo '<div class="form-group">';
        echo '<div class="input-group">';

        // Content Addon
        echo '<div class="input-group-addon">';
        echo '<span class="oi oi-ellipses"></span>';
        echo '</div>';

        // Content input
        echo '<input ';
        echo 'class="form-control input-detail-content" ';
        echo 'name="';
        echo 'content-' . $detail['id'];
        echo '" ';
        echo 'type="text" ';
        echo 'value="';
        echo $detail['detail'];
        echo '" ';
        echo 'placeholder="Content">';
        echo '</input>';

        // Content divs end
        echo '</div>';
        echo '</div>';
        echo '</div>';

        // Row ending tags
        echo '</div>';
      }

      echo '<div id="details"></div>';
    }
  }

?>
