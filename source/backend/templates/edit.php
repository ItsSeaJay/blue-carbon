<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit&nbsp;<?php echo $project->title; ?></title>

    <!-- Styles -->
    <!-- Main -->
    <link rel="stylesheet" href="../styles/main.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Open Iconic -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" integrity="sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=" crossorigin="anonymous">

    <!-- Scripts -->
    <!-- JQuery -->
    <script  src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- JQuery UI -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <!-- Sortable -->
    <script type="text/javascript" src="scripts/sortable.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <!-- Preview Description -->
    <script src="scripts/preview-description.js" charset="utf-8"></script>
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
              <a class="nav-link" href="#logout-modal" data-toggle="modal">
                <span class="oi oi-account-logout"></span>
                &nbsp;
                Logout
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- Content -->
    <div class="container">
      <!-- Title -->
      <h1>Edit <?php echo $project->title; ?></h1>
      <!-- Edit Form -->
      <section class="row">
        <!-- Form Body -->
        <div class="col-md">
          <form action="edit_project.php" method="post">
            <!-- ID -->
            <input type="number" name="id" value="<?php echo $project->id; ?>" hidden="true">
            <!-- Title -->
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="title">
                    Title
                  </label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <span class="oi oi-text"></span>
                    </div>
                    <input class="form-control" type="text" name="title" value="<?php echo $project->title; ?>" placeholder="Title">
                  </div>
                </div>
              </div>
            </div>
            <!-- Subtitle -->
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="title">
                    Subtitle
                  </label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <span class="oi oi-ellipses"></span>
                    </div>
                    <input class="form-control" type="text" name="subtitle" value="<?php echo $project->subtitle; ?>" placeholder="Subtitle">
                  </div>
                </div>
              </div>
            </div>
            <!-- Description -->
            <div class="row">
              <div class="col-md">
                <div class="form-group">
                  <label for="title">
                    Description (Code)
                  </label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <span class="oi oi-code"></span>
                    </div>
                    <textarea id="description" name="description" class="form-control" rows="16"><?php echo $project->description; ?></textarea>
                  </div>
                </div>
                <!-- Markdown Notice -->
                <a href="https://www.markdownguide.org/cheat-sheet" target="_blank">
                  <small>
                    Use Markdown
                    <img src="resources/markdown-seeklogo.com.svg" alt="Markdown Logo" width="16px" height="auto">
                    to edit the project description.
                  </small>
                </a>
              </div>
              <div class="col-md">
                <label>
                  Description (Preview)
                </label>
                <div id="preview" class="form-group">
                  <?php
                    require_once '../../libraries/parsedown/parsedown.php';

                    $parsedown = new Parsedown();

                    echo $parsedown->text($project->description);
                  ?>
                </div>
              </div>
            </div>
            <!-- Buttons -->
            <!-- Button to trigger cancel modal -->
            <!-- Button to Save Changes -->
            <button class="btn btn-success" type="submit" name="save">
              <span class="oi oi-circle-check"></span>
              &nbsp;
              Save Changes
            </button>
            <a href="#cancel-modal" role="button" class="btn btn-danger" data-toggle="modal">
              <span class="oi oi-circle-x"></span>
              &nbsp;
              Discard Changes
            </a>
          </form>
        </div>
      </section>
    </div>

    <!-- Modals -->
    <!-- Cancel Modal -->
    <div id="cancel-modal" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Discard Changes</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>
              Are you sure? All unsaved changes to
              <?php echo $project->title; ?>
              will be lost.
            </p>
          </div>
          <div class="modal-footer">
            <a href="dashboard.php" class="btn btn-danger">
              Yes, I'm Sure
            </a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
              Cancel
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Logout Modal -->
    <div id="logout-modal" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Logout</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>
              Are you sure? All unsaved changes to
              <?php echo $project->title; ?>
              will be lost.
            </p>
          </div>
          <div class="modal-footer">
            <a href="logout.php" class="btn btn-danger">
              Yes, I'm Sure
            </a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
              Cancel
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>
