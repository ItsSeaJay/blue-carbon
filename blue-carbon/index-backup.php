<?php
  require_once 'red-iron/database.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project: Blue Carbon</title>
    <link rel="stylesheet" href="styles/bootstrap-grid.min.css">
    <link rel="stylesheet" href="styles/desktop/main.css">
    <link rel="stylesheet" href="styles/desktop/header.css">
    <link rel="stylesheet" href="styles/desktop/navigation.css">
    <link rel="stylesheet" href="styles/desktop/footer.css">
    <link rel="stylesheet" href="styles/desktop/fonts.css">
    <link rel="stylesheet" href="styles/desktop/thumbnail.css">
  </head>
  <body>
    <header class="header">
      <div>
        <h1 class="text-center">Project: Blue Carbon</h1>
        <h2 class="text-center">Subtitle</h2>
      </div>
    </header>
    <nav class="navigation">
      <ul>
        <li>
          <a href="#">Home</a>
        </li>
        <li>
          <a href="#portfolio">Portfolio</a>
        </li>
        <li>
          <a href="#about">About</a>
        </li>
        <li>
          <a href="#contact">Contact</a>
        </li>
      </ul>
    </nav>
    <div class="content containter-fluid">
      <div class="container">
        <!-- Portfolio -->
        <h1 id="portfolio">Portfolio</h1>
        <section class="row">
          <?php include 'controllers/project.php'; ?>
        </section>
        <!-- About -->
        <h1 id="about">About</h1>
        <section class="row">
          <?php include 'views/about.php'; ?>
        </section>
        <!-- Contact -->
        <h1 id="contact">Contact</h1>
        <section class="row">
          <?php include 'views/contact.php'; ?>
        </section>
      </div>
    </div>
    <footer class="footer text-center">
      <small>Copyright &copy; [name] [year] all rights reserved.</small>
    </footer>
  </body>
</html>
