<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="css/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <style>
    .bg-dark {
      background-color: #81AE64!important;
    }

    .navbar-toggler {
      background-color: rgb(52, 58, 64);
    }

    .navbar {
      padding: 0px;
    }

    .navbar-nav {
      flex-direction: row;
      width: 100%;
    }

    .navbar-btn {
      width: 100%;
      border-radius: 0em;
      border-right: 1px solid black;
      border-bottom: 1px solid black;
      background-color: #C7E78B;
      color: black;
    }

    .navbar-btn:hover {
      color: black;
      background-color: #81AE64;
    }

    .navbar-nav > li:first-of-type > a {
      border-left: 1px solid black;
    }

    .nav-item {
      padding: 0px;
    }

    .secondary-color {
      background-color: #FFF4C9;
    }

    .top-row {
      margin-top: 3em;
    }

    .plant-img {
      background-color: white;
      border: 1px solid black;
    }

    .btn-success {
      background-color: #C7E78B;
      color: black;
    }

    .btn-success:hover {
      background-color: #81AE64;
      color: black;
    }

    .card-body p {
      margin: 0em;
      font-size: .8em;
    }

    .card-footer > a {
      font-size: .8em;
    }

    .info-card {
      margin-top: 1em;
    }

    #bottomFixedContainer {
      height: 6em;
      width: 100%;
      position: fixed;
      z-index: 777;
      bottom: 0px;
      background-color: white;
    }

  </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-dark bg-dark fixed-top" id="mainNav">
    <ul class="navbar-nav" id="exampleAccordion">
      <li class="col-2 col-sm-2 col-md-2 nav-item">
        <a class="navbar-btn btn btn-default" href="#">
          <span class="nav-link-text"><i class="fa fa-home fa-lg" aria-hidden="true"></i></span>
        </a>
      </li>
      <li class="col-2 col-sm-2 col-md-2 nav-item">
        <a class="navbar-btn btn btn-default" href="#">
          <span class="nav-link-text"><i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i></span>
        </a>
      </li>
      <li class="col-2 col-sm-2 col-md-2 nav-item">
        <a class="navbar-btn btn btn-default" href="#">
          <span class="nav-link-text"><i class="fa fa-calendar fa-lg" aria-hidden="true"></i></span>
        </a>
      </li>
      <li class="col-2 col-sm-2 col-md-2 nav-item">
        <a class="navbar-btn btn btn-default" href="#">
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
      <!-- Icon Cards-->
      <div class="top-row row">
        <div class="col-md-12">
          <div class="card text-black secondary-color o-hidden h-100">
            <div class="card-body">
              <div class="row h-100">
                <div class="col-4 col-sm-4 col-md-3 my-auto">
                  <img class="plant-img img-fluid" src="/img/tomato.jpg">
                </div>
                <div class="col-8 col-sm-8 col-md-9 my-auto">
                  <p>Tomatoes run on warmth; plant them in late spring and early summer except in zone 10, where they are a fall and winter crop.</p>
                </div>
              </div>
            </div>
            <span class="card-footer">
              <a class="btn btn-success float-right" href="#">Learn More:</a>
            </span>
          </div>
        </div>
      </div>

      <div class="info-card row">
        <div class="col-md-12">
          <div class="card text-black secondary-color o-hidden h-100">
            <div class="card-body">
              <div class="row h-100">
                <div class="col-4 col-sm-4 col-md-3 my-auto">
                  <img class="plant-img img-fluid" src="/img/tomato.jpg">
                </div>
                <div class="col-8 col-sm-8 col-md-9 my-auto">
                  <p>Tomatoes run on warmth; plant them in late spring and early summer except in zone 10, where they are a fall and winter crop.</p>
                </div>
              </div>
            </div>
            <span class="card-footer">
              <a class="btn btn-success float-right" href="#">Learn More:</a>
            </span>
          </div>
        </div>
      </div>

      <div class="info-card row">
        <div class="col-md-12">
          <div class="card text-black secondary-color o-hidden h-100">
            <div class="card-body">
              <div class="row h-100">
                <div class="col-4 col-sm-4 col-md-3 my-auto">
                  <img class="plant-img img-fluid" src="/img/tomato.jpg">
                </div>
                <div class="col-8 col-sm-8 col-md-9 my-auto">
                  <p>Tomatoes run on warmth; plant them in late spring and early summer except in zone 10, where they are a fall and winter crop.</p>
                </div>
              </div>
            </div>
            <span class="card-footer">
              <a class="btn btn-success float-right" href="#">Learn More:</a>
            </span>
          </div>
        </div>
      </div>

      <div class="info-card row">
        <div class="col-md-12">
          <div class="card text-black secondary-color o-hidden h-100">
            <div class="card-body">
              <div class="row h-100">
                <div class="col-4 col-sm-4 col-md-3 my-auto">
                  <img class="plant-img img-fluid" src="/img/tomato.jpg">
                </div>
                <div class="col-8 col-sm-8 col-md-9 my-auto">
                  <p>Tomatoes run on warmth; plant them in late spring and early summer except in zone 10, where they are a fall and winter crop.</p>
                </div>
              </div>
            </div>
            <span class="card-footer">
              <a class="btn btn-success float-right" href="#">Learn More:</a>
            </span>
          </div>
        </div>
      </div>

      <div class="info-card row">
        <div class="col-md-12">
          <div class="card text-black secondary-color o-hidden h-100">
            <div class="card-body">
              <div class="row h-100">
                <div class="col-4 col-sm-4 col-md-3 my-auto">
                  <img class="plant-img img-fluid" src="/img/tomato.jpg">
                </div>
                <div class="col-8 col-sm-8 col-md-9 my-auto">
                  <p>Tomatoes run on warmth; plant them in late spring and early summer except in zone 10, where they are a fall and winter crop.</p>
                </div>
              </div>
            </div>
            <span class="card-footer">
              <a class="btn btn-success float-right" href="#">Learn More:</a>
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