<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $project->title; ?></title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <!-- Title -->
    <h1><?php echo $project->title; ?></h1>
    <!-- Subtitle -->
    <h2><?php echo $project->subtitle; ?></h2>
    <!-- Thumbnail -->
    <img src=<?php echo '"' . $project->thumbnail . '"'; ?> alt=<?php echo '"' . $project->title . ' Thumbnail"'; ?>>

    <!-- Description -->
    <p><?php echo $project->description; ?></p>

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
