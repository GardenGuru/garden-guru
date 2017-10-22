<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Garden Guru</title>
  <!-- Bootstrap core CSS-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="css/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/custom-style.css">
  <style>
    #searchBar {
      margin-top: 1em;
    }
    .top-jumbo {
      margin-top: 0em;
    }
    .content-wrapper {
      background: transparent;
    }
  </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-dark bg-dark fixed-top mb-4" id="mainNav">
    <ul class="navbar-nav" id="exampleAccordion">
      <li class="col-2 col-sm-2 col-md-2 nav-item">
        <a id="homeButton" class="navbar-btn btn btn-default" href="?controller=home&action=manage">
          <span class="nav-link-text"><img id="homeLogo" src="/img/gardenGuruLogoMini.png"></span>
        </a>
      </li>
      <li class="col-2 col-sm-2 col-md-2 nav-item">
        <a class="navbar-btn btn btn-default" href="#">
          <span class="nav-link-text"><i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></span>
        </a>
      </li>
      <li class="col-2 col-sm-2 col-md-2 nav-item">
        <a class="navbar-btn btn btn-default" href="?controller=home&action=calendar">
          <span class="nav-link-text"><i class="fa fa-calendar fa-lg" aria-hidden="true"></i></span>
        </a>
      </li>
      <li class="col-2 col-sm-2 col-md-2 nav-item">
        <a class="navbar-btn btn btn-default" href="?controller=home&action=plantIndex">
          <span class="nav-link-text"><i class="fa fa-leaf fa-lg" aria-hidden="true"></i></span>
        </a>
      </li>
      <li class="col-2 col-sm-2 col-md-2 nav-item">
        <a class="navbar-btn btn btn-default" href="#">
          <span class="nav-link-text"><i class="fa fa-usd fa-lg" aria-hidden="true"></i></span>
        </a>
      </li>
      <li class="col-2 col-sm-2 col-md-2 nav-item">
        <a class="navbar-btn btn btn-default" href="#">
          <span class="nav-link-text"><i class="fa fa-heart fa-lg" aria-hidden="true"></i></span>
        </a>
      </li>
    </ul>
  </nav>
  <div class="content-wrapper">
    <div id="infoCardContainer" class="container-fluid">
      <div class="top-jumbo jumbotron jumbotron-fluid">
        <div class="container">
          <h4>The Index</h4>
          <p>Search for new additions to your garden here, we've already suggested a few for you based on current location and climate!</p>
          <div id="searchBar" class="form-row align-items-center">
            <div class="col-8">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <div class="col-4">
              <button type="button" class="btn secondary-color">Search</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Icon Cards-->
      <div class="info-card row">
        <div class="col-md-12">
          <div class="card text-black secondary-color o-hidden">
            <div class="card-body">
              <div class="row">
                <div class="card-img-div col-3 col-sm-3 col-md-2 my-auto">
                  <img class="plant-img img-fluid" src="/img/tomato.jpg">
                </div>
                <div class="vertical-line"></div>
                <div class="card-text-div col-8 col-sm-8 col-md-9 my-auto">
                  <p>Tomatoes run on warmth; plant them in late spring and early summer except in zone 10, where they are a fall and winter crop.</p>
                </div>
              </div>
            </div>
            <span class="card-footer">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" id="tomato1" value="tomato1"> Add to List
              </label>
              <a class="btn btn-success float-right" href="#">Learn More</a>
            </span>
          </div>
        </div>
      </div>

      <div class="info-card row">
        <div class="col-md-12">
          <div class="card text-black secondary-color o-hidden">
            <div class="card-body">
              <div class="row">
                <div class="card-img-div col-3 col-sm-3 col-md-2 my-auto">
                  <img class="plant-img img-fluid" src="/img/tomato.jpg">
                </div>
                <div class="vertical-line"></div>
                <div class="card-text-div col-8 col-sm-8 col-md-9 my-auto">
                  <p>Tomatoes run on warmth; plant them in late spring and early summer except in zone 10, where they are a fall and winter crop.</p>
                </div>
              </div>
            </div>
            <span class="card-footer">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" id="tomato1" value="tomato1"> Add to List
              </label>
              <a class="btn btn-success float-right" href="#">Learn More</a>
            </span>
          </div>
        </div>
      </div>

      <div class="info-card row">
        <div class="col-md-12">
          <div class="card text-black secondary-color o-hidden">
            <div class="card-body">
              <div class="row">
                <div class="card-img-div col-3 col-sm-3 col-md-2 my-auto">
                  <img class="plant-img img-fluid" src="/img/tomato.jpg">
                </div>
                <div class="vertical-line"></div>
                <div class="card-text-div col-8 col-sm-8 col-md-9 my-auto">
                  <p>Tomatoes run on warmth; plant them in late spring and early summer except in zone 10, where they are a fall and winter crop.</p>
                </div>
              </div>
            </div>
            <span class="card-footer">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" id="tomato1" value="tomato1"> Add to List
              </label>
              <a class="btn btn-success float-right" href="#">Learn More</a>
            </span>
          </div>
        </div>
      </div>

      <div class="info-card row">
        <div class="col-md-12">
          <div class="card text-black secondary-color o-hidden">
            <div class="card-body">
              <div class="row">
                <div class="card-img-div col-3 col-sm-3 col-md-2 my-auto">
                  <img class="plant-img img-fluid" src="/img/tomato.jpg">
                </div>
                <div class="vertical-line"></div>
                <div class="card-text-div col-8 col-sm-8 col-md-9 my-auto">
                  <p>Tomatoes run on warmth; plant them in late spring and early summer except in zone 10, where they are a fall and winter crop.</p>
                </div>
              </div>
            </div>
            <span class="card-footer">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" id="tomato1" value="tomato1"> Add to List
              </label>
              <a class="btn btn-success float-right" href="#">Learn More</a>
            </span>
          </div>
        </div>
      </div>

      <div class="info-card row">
        <div class="col-md-12">
          <div class="card text-black secondary-color o-hidden">
            <div class="card-body">
              <div class="row">
                <div class="card-img-div col-3 col-sm-3 col-md-2 my-auto">
                  <img class="plant-img img-fluid" src="/img/tomato.jpg">
                </div>
                <div class="vertical-line"></div>
                <div class="card-text-div col-8 col-sm-8 col-md-9 my-auto">
                  <p>Tomatoes run on warmth; plant them in late spring and early summer except in zone 10, where they are a fall and winter crop.</p>
                </div>
              </div>
            </div>
            <span class="card-footer">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" id="tomato1" value="tomato1"> Add to List
              </label>
              <a class="btn btn-success float-right" href="#">Learn More</a>
            </span>
          </div>
        </div>
      </div>
    </div>
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript-->
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="/js/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="/js/Chart.min.js"></script>
    <script src="/js/jquery.dataTables.js"></script>
    <script src="/js/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="/js/sb-admin-datatables.min.js"></script>
    <script src="/js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>