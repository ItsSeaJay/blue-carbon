<?php
  require_once 'frontend/models/Profile_Model.php';

  $profile_model = new Profile_Model('frontend/templates/project.php');
  $full_name = $profile_model->get_full_name();
  $year = date("Y");

  $copyright = 'Copyright &copy; ' . $full_name . '&nbsp;' . $year;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $project->title; ?></title>
    <!-- Styles -->
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <header class="jumbotron">
      <h1>
        <a href="index.php"><?php echo $full_name ?></a>
      </h1>
    </header>

    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <!-- Title -->
          <h1><?php echo $project->title; ?></h1>
          <!-- Subtitle -->
          <h2><?php echo $project->subtitle; ?></h2>
        </div>
        <div class="col-lg-6">
          <!-- Thumbnail -->
          <img class="responsive" src=<?php echo '"' . $project->thumbnail . '"'; ?> alt=<?php echo '"' . $project->title . ' Thumbnail"'; ?>>

          <!-- Description -->
          <p><?php echo $project->description; ?></p>
        </div>
      </div>
    </div>

    <footer class="container">
      <div class="jumbotron">
        <!-- Copyright Notice -->
        <small>
          <?php echo $copyright; ?>
        </small>
      </div>
    </footer>
  </body>
</html>
