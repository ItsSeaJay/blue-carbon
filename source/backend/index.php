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
    <script src="scripts/login.js" type="text/javascript"></script>
  </head>
  <body>
    <div class="container">
      <h1 class="text-center">Login</h1>

      <!-- Login Form -->
      <form id="login-form" method="post">
        <!-- Username -->
        <label for="username">
          <h2>Username</h2>
        </label>
        <input class="form-control" type="text" name="username" value="" placeholder="Username">
        <!-- Password -->
        <label for="password">
          <h2>Password</h2>
        </label>
        <input class="form-control" type="password" name="password" value="" placeholder="Password">
        <hr>
        <button class="btn btn-default" type="submit" name="login" value="submit">Login</button>
      </form>

      <p id="result"></p>
    </div>
  </body>
</html>
