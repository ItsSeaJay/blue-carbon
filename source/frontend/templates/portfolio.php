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
    <title>Blue Carbon</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <header class="container">
      <h1 style="text-align: center;">
        <a href="index.php"><?php echo $full_name ?></a>
      </h1>
    </header>

    <div class="container">
      <?php
        // Echo project thumbnails
        $project_count = 0;
        $projects_per_row = 3;

        foreach ($projects as $project)
        {
          // Insert rows based on the number of projects
          if ($project_count % $projects_per_row == 0)
          {
            // If this isn't the first time we're inserting a row
            if ($project_count != 0)
            {
              echo '</div>';
            }
            // Otherwise, insert a new row
            echo '<div class="row">';
          }

          // Output single thumbnail
          echo '<div class="thumbnail col-md">';
          echo '<a href="project.php?title=' . urlencode($project['title']) . '">';
          echo '<img class="responsive" src="' . $project['thumbnail'] . '">';
          echo '<h1>' . $project['title'] . '</h1>';
          echo '<p>' . $project['subtitle'] . '</p>';
          echo '</a>';
          echo '</div>';

          $project_count++;
        }
      ?>
    </div>
    <footer class="container">
      <small><?php echo $copyright; ?></small>
    </footer>
  </body>
</html>
