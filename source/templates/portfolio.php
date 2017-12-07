<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blue Carbon</title>
    <link rel="stylesheet" href="styles/main.css">
  </head>
  <body>
    <!-- Thumbnails -->
    <?php
      // Echo project thumbnails
      foreach ($projects as $project)
      {
        echo '<div class="thumbnail">' . "\n";
        echo '<a href="project.php?title=' . $project['title'] . '">' . "\n";
        echo '<img src="' . $project['thumbnail'] . '">' . "\n";
        echo '<h1>' . $project['title'] . '</h1>' . "\n";
        echo '<p>' . $project['subtitle'] . '</p>' . "\n";
        echo '</a>' . "\n";
        echo '</div>' . "\n";
      }
    ?>
  </body>
</html>
