<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
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
  </head>
  <body>
    <!-- Header -->
    <header>
      <!-- Top Navigation Bar -->
      <nav class="navbar navbar-dark bg-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="dashboard.php">Aquafolio</a>
        <!-- Left Side -->
        <ul class="nav navbar-nav navbar-left">

        </ul>
        <!-- Right Side -->
        <ul class="nav navbar-nav navbar-right">
          <li class="navbar-item">
            <a class="nav-link" href="logout.php">
              <span class="oi oi-account-logout"></span>&nbsp;Logout
            </a>
          </li>
        </ul>
      </nav>
    </header>

    <div id="wrapper" class="toggled">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
          <li>
            <a href="#">Dashboard</a>
          </li>
          <li>
            <a href="#">Shortcuts</a>
          </li>
          <li>
            <a href="#">Overview</a>
          </li>
          <li>
            <a href="#">Events</a>
          </li>
          <li>
            <a href="#">About</a>
          </li>
          <li>
            <a href="#">Services</a>
          </li>
          <li>
            <a href="#">Contact</a>
          </li>
        </ul>
      </div>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper">
          <div class="container-fluid">
            <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">Toggle Menu</a>
          </div>
      </div>
      <!-- /#page-content-wrapper -->

      <!-- Menu Toggle Script -->
      <script>
      $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
      });
      </script>
    </div>
  </body>
</html>
