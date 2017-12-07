<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $project->title; ?></title>
  </head>
  <body>
    <!-- Title -->
    <h1><?php echo $project->title; ?></h1>
    <!-- Subtitle -->
    <h2><?php echo $project->subtitle; ?></h2>
    <!-- Thumbnail -->
    <img src=<?php echo '"' . $project->thumbnail . '"'; ?> alt=<?php echo '"' . $project->title . ' Thumbnail"'; ?>>

    <!-- Details -->
    <p><?php echo $project->description; ?></p>
    <?php
      // Reformat date from view
      $date = DateTime::createFromFormat('Y-m-d', $project->release_date);
      $formatted_date = $date->format('F j, Y');
    ?>
    <ul>
      <li>
        <strong>Release Date:&nbsp;</strong> <?php echo $formatted_date; ?>
      </li>
    </ul>

    <footer>
      <!-- Copyright Notice -->
      <small>
        <?php
          require_once 'models/Profile_Model.php';

          $profile_model = new Profile_Model('templates/project.php');
          $full_name = $profile_model->get_full_name();
          $year = date("Y");

          $copyright = 'Copyright &copy; ' . $full_name . '&nbsp;' . $year;

          echo $copyright;
        ?>
      </small>
    </footer>
  </body>
</html>
