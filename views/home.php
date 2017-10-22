<!doctype html>
<html lang="en">
  <head>
    <title>Welcome to Garden Guru!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom-style.css">
    <link rel="stylesheet" href="/css/onboarding-style.css">
    <style>
      .sticky-footer {
        position: fixed;
        bottom: 0;
      }
    </style>
  </head>
  <body class="bg-dark">
    <nav class="navbar navbar-dark bg-dark mb-4">
      <ul id="navbarList" class="navbar-nav bg-light">
        <li class="col-2 col-sm-2 col-md-2 nav-item">
          <button class="navbar-btn btn btn-default"><span class="nav-link-text"><img id="homeLogo" src="/img/gardenGuruLogoMini.png"></span></button>
        </li>
        <li class="offset-7 col-3 col-sm-3 col-md-3 nav-item">
          <a id="loginButton" class="navbar-btn btn btn-default" href="/login.php">Login</a>
        </li>
      </ul>
    </nav>
    <main role="main" class="container">
      <div class="jumbotron secondary-color">
        <h1 class="text-center"><img class="col-12" src="/img/gardenGuruLogo.png"></h1>
        <p class="text-center lead">Garden Guru makes gardening fun again</p>
        <div class="col-12 text-center">
          <a class="btn btn-lg btn-success center-block" href="?controller=home&action=signup" role="button">Sign Up &raquo;</a>
        </div>
      </div>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>