<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $project->title; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <h1><?php echo $project->title; ?></h1>
    <p><?php echo $project->description; ?></p>
    <?php
      // Reformat date from view
      $date = DateTime::createFromFormat('Y-m-d', $project->release_date);
      $formatted_date = $date->format('F j, Y');
    ?>
    <p>
      <b>Release Date:&nbsp;</b><i><?php echo $formatted_date; ?></i>
    </p>
  </body>
</html>
