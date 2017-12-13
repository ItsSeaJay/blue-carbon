<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login to Blue Carbon CMS</title>
    <!-- Styles -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Open Iconic -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" integrity="sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=" crossorigin="anonymous">
    <!-- Scripts -->
    <!-- JQuery -->
    <script  src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- JQuery UI -->
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <!-- Login -->
    <script src="scripts/login.js" type="text/javascript"></script>
  </head>
  <body>
    <div class="container">
      <section class="row">
        <section class="col-lg">
          <h1 class="text-center">Login</h1>
          <a href="../">
            <span class="oi oi-arrow-left"></span>
            Back to frontend
          </a>
          <!-- Login Form -->
          <form id="login-form" method="post">
            <!-- Username -->
            <label for="username">
              <h2>Username</h2>
            </label>
            <input id="username" class="form-control" type="text" name="username" value="" placeholder="Username">
            <!-- Password -->
            <label for="password">
              <h2>Password</h2>
            </label>
            <input id="password" class="form-control" type="password" name="password" value="" placeholder="Password">
            <hr>
            <button class="btn btn-default" type="submit" name="login">
              <span class="oi oi-account-login"></span>&nbsp;Login
            </button>
          </form>
        </section>
      </section>

      <p id="result"></p>
    </div>
  </body>
</html>
