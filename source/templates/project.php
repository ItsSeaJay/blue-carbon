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
  </body>
</html>
