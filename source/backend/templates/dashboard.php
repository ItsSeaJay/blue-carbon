<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Blue Carbon Dashboard</title>

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
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <!-- New Project -->
    <script type="text/javascript" src="scripts/new-project.js"></script>
    <!-- Delete Project -->
    <script type="text/javascript" src="scripts/delete-project.js"></script>
  </head>
  <body>
    <!-- Header -->
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="dashboard.php">
          Blue Carbon
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
              <a class="nav-link" href="logout.php">
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
      <!-- Projects -->
      <section class="row" style="padding-top: 32px;">
        <div class="col-md">
          <!-- Projects List (Sortable) -->
          <ul id="sortable" style="list-style: none;">
            <?php
              // Output existing projects
              foreach ($projects as $project)
              {
                // Single thumbnail
                echo '<li class="alert alert-dark" >';
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
                echo '<a class="btn btn-sm btn-danger btn-delete-project" href="dashboard.php';
                echo '?title=' . urlencode($project['title']) . '" ';
                echo 'data-title="' . $project['title'] . '">';
                echo '<span class="oi oi-trash"></span>';
                echo '&nbsp;';
                echo 'Delete';
                echo '</a>';
                echo '</div>';
                echo '</li>';
              }
            ?>
          </ul>
        </div>
      </section>

      <hr>

      <!-- Controls -->
      <section class="row">
        <div class="col-md">
          <button id="new" class="btn btn-success" type="button" name="button" data-toggle="modal" data-target="#new-project">
            <span class="oi oi-document"></span>
            &nbsp;
            New Project
          </button>
        </div>
      </section>
    </div>

    <!-- Modals -->
    <!-- New Project -->
    <div id="new-project" class="modal fade">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">New Project</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>
              A project is any single piece of work that you want an employer to see. </br>
              Make it a good one!
            </p>
            <form id="details" class="form">
              <!-- title -->
              <div class="form-group">
                <label for="title">
                  <h6>
                    <strong>Title</strong>
                  </h6>
                </label>
                <input class="form-control" type="text" name="title" placeholder="Title">
                <!-- Errors -->
                <small id="blank-title" class="invalid-feedback">
                  <em>
                    The new project's title cannot be blank.
                  </em>
                </small>
                <small id="unique-title" class="invalid-feedback">
                  <em>
                    The new project's title must be unique.
                  </em>
                </small>
              </div>

              <!-- Subtitle -->
              <div class="form-group">
                <label for="subtitle">
                  <h6>
                    <strong>Subtitle</strong>
                  </h6>
                </label>
                <input class="form-control" type="text" name="subtitle" placeholder="Subtitle">
              </div>
              <p>
                You can always change these details later.
              </p>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Create</button>
          </form>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Delete Project -->
    <div id="delete-project" class="modal fade">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Delete Project</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h6>Are you sure?</h6>
            <p>
              Once deleted, you cannot get
              <strong><span id="title-span"></span></strong>
              back. All links, details and descriptive information will be lost.
            </p>
            <p>
              Please type the title of the project to confirm (case sensitive).
            </p>

            <form id="delete-form" class="form" action="">
              <input class="form-control" type="text" name="title" placeholder="Title">

              <!-- Errors -->
              <small id="blank-title-delete" class="invalid-feedback">
                <em>
                  The title field cannot be blank.
                </em>
              </small>
              </br>
              <small id="nonmatching-title-delete" class="invalid-feedback">
                <em>
                  The title must match the project you want to delete.
                </em>
              </small>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger">
              Yes, I'm Sure
            </button>
          </form>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
              Cancel
            </button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
