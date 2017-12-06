<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $project->title; ?></title>
  </head>
  <body>
    <h1><?php echo $project->title; ?></h1>
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
