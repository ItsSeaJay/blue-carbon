<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $project->title; ?></title>
  </head>
  <body>
    <!-- Title -->
    <h1><?php echo $project->title; ?></h1>
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
      <small>
        <?php
          $query = "SELECT * FROM profile";
          $statement = $GLOBALS['database']->prepared_statement($query, array());

          $profile = $statement->fetchObject();

          $full_name = $profile->first_name . ' ' . $profile->last_name;

          $copyright = 'Copyright &copy; ' . $full_name;

          echo $copyright;
        ?>
      </small>
    </footer>
  </body>
</html>
