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
    <header class="container">
      <h1 class="text-center">
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
          <!-- Trailer -->
          <?php
            if (strlen($project->trailer) > 0)
            {
              // Check if the trailer provided is a YouTube video embed code
              $embed_signifier = "https://www.youtube.com/embed/";

              if (substr($project->trailer, 0, strlen($embed_signifier)) === $embed_signifier)
              {
                echo '<iframe width="100%" height="360" src="';
                echo $project->trailer;
                echo '" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
              }
              else
              {
                // Assume HTML5 video
                echo '<video width="100%" height="auto" controls poster=';
                echo $project->thumbnail;
                echo '>';
                echo '<source src="';
                echo $project->trailer;
                echo '" kind="video/mp4">'; // Assume .mp4 MIME type
                echo 'If you can read this, your browser doesn\'t support HTML5';
                echo ' video, or the source is broken.';
                echo '</video>';
              }
            }
            else
            {
              // Show the thumbnail instead
              echo '<img width="100%" height="auto" alt=';
              echo $project->title;
              echo '" src="';
              echo $project->thumbnail;
              echo '">';
            }
          ?>
          <!-- Description -->
          <p>
            <?php
              require_once '../libraries/parsedown/parsedown.php';

              $parsedown = new Parsedown();

              echo $parsedown->text($project->description);
            ?>
          </p>
        </div>
      </div>
    </div>

    <footer class="container">
      <!-- Copyright Notice -->
      <small class="text-center">
        <?php echo $copyright; ?>
      </small>
    </footer>
  </body>
</html>
