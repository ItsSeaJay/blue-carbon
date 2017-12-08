<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login to Blue Carbon CMS</title>
    <!-- Styles -->
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Scripts -->
    <script  src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $("h2").click(function () {
          $(this).hide();
        })
      })
    </script>
  </head>
  <body>
    <div class="container">
      <h1 class="text-center">Login</h1>
      <!-- Login Form -->
      <div id="login-form">
        <label for="username">
          <h2>Username</h2>
        </label>
        <input class="form-control" type="text" name="username" value="" placeholder="Username">
        <label for="password">
          <h2>Password</h2>
        </label>
        <input class="form-control" type="password" name="username" value="" placeholder="Password">
        <hr>
        <button class="btn btn-default" type="submit" name="login">Login</button>
      </div>
    </div>
  </body>
</html>