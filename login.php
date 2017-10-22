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
      #signupImage {
        width: 100%;
        margin-top: -1.5em;
        margin-bottom: 1em;
      }

      #formJumbo {
        padding-bottom: 0px;
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
          <a id="signupButton" class="navbar-btn btn btn-default" href="/signup.php">Signup</a>
        </li>
      </ul>
    </nav>

    <div class="container">
      <div id="formJumbo" class="jumbotron secondary-color">
        <div class="row">
          <div class="col-12 col-xs-10 col-sm-8 col-md-6 text-center">
            <img id="signupImage" src="/img/gardenGuruLogo.png">
          </div>
        </div>
        <form>
          <div class="row">
            <div class="form-group col-12">
              <label for="email">Email Address</label>
              <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-12">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-12">
              <a class="btn btn-success float-right" href="/manage.php">Login</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>