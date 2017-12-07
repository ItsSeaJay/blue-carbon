<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blue Carbon</title>
    <link rel="stylesheet" href="styles/main.css">
  </head>
  <body>
    <div class="container">
      <!-- Thumbnails -->
      <?php
        // Echo project thumbnails
        foreach ($projects as $project)
        {
          echo '<div class="thumbnail">';
          echo '<a href="project.php?title=' . urlencode($project['title']) . '">';
          echo '<img src="' . $project['thumbnail'] . '">';
          echo '<h1>' . $project['title'] . '</h1>';
          echo '<p>' . $project['subtitle'] . '</p>';
          echo '</a>';
          echo '</div>';
        }
      ?>
    </div>
  </body>
</html>
