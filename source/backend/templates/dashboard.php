<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aquafolio Dashboard</title>

    <!-- Styles -->
    <!-- Main -->
    <link rel="stylesheet" href="../styles/main.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Open Iconic -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" integrity="sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=" crossorigin="anonymous">

    <!-- Scripts -->
    <!-- JQuery -->
    <script  src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- JQuery UI -->
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <!-- Sortable -->
    <script type="text/javascript" src="scripts/sortable.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <!-- New Project -->
    <script type="text/javascript" src="scripts/new-project.js">
    </script>
  </head>
  <body>
    <!-- Header -->
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="dashboard.php">
          <span class="oi oi-droplet"></span>&nbsp;Aquafolio
        </a>

        <!-- Expand Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar (Dropdown) -->
        <div id="navbarNavDropdown" class="navbar-collapse collapse">
          <!-- Left Side -->
          <ul class="navbar-nav mr-auto">
            <!-- TODO: find something to put in this menu -->
          </ul>
          <!-- Right Side -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <div class="nav-link">
                <span>Mode</span>
                <select>
                  <option>Release</option>
                  <option>Debug</option>
                </select>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">
                <span class="oi oi-account-logout"></span>&nbsp;Logout
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- Content -->
    <div class="container">
      <!-- Controls -->
      <section class="row">
        <div class="col-md">
          <button id="new" class="btn btn-success" type="button" name="button">
            <span class="oi oi-document"></span>
            &nbsp;
          </button>
        </div>
      </section>
      <!-- Projects -->
      <section class="row">
        <div class="col-md">

          <!-- Projects List (Sortable) -->
          <ul id="sortable" style="list-style: none;">
            <?php
              // Output existing projects
              foreach ($projects as $project)
              {
                // Single thumbnail
                echo '<li class="alert alert-dark">';
                echo $project['title'];
                echo '<div class="float-right">';

                // Edit Button
                echo '<a class="btn btn-sm btn-primary" href="edit.php?title=';
                echo urlencode($project['title']);
                echo '" role="button">';
                echo '<span class="oi oi-pencil"></span>';
                echo '&nbsp;';
                echo 'Edit';
                echo '</a>';

                echo '&nbsp;';

                // Delete button
                echo '<button class="btn btn-sm btn-danger">';
                echo '<span class="oi oi-trash"></span>';
                echo '&nbsp;';
                echo 'Delete';
                echo '</button>';
                echo '</div>';
                echo '</li>';
              }
            ?>
          </ul>
        </div>
      </section>
    </div>
  </body>
</html>
