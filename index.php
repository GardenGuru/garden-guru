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

    .top-jumbo {
      margin-top: 3em;
      margin-bottom: 0em;
      background-color: #C7E78B;
      border: 1px solid black;
      padding-top: 1.5em;
    }

    .top-jumbo p {
      font-size: .8em;
      margin-bottom: 0em;
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

    .vertical-line {
      border-right: 1px solid black; 
    }

    .card-body > .row.h-100 > .my-auto {
      padding-left: 5px;
    }

    .card-img-div {
      padding-right: 5px;
    }

    .card-text-div {
      padding-right: 0px;
      line-height: 1.4em;
    }

    #homeButton {
      padding-left: .25em;
      padding-right: .25em;
    }

    #homeLogo {
      width: 24px;
      height: auto;
    }

    #weatherDescription {
      text-transform: capitalize;
    }

    #weatherIcon > img {
      width: 25px;
    }

  </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-dark bg-dark fixed-top mb-4" id="mainNav">
    <ul class="navbar-nav" id="exampleAccordion">
      <li class="col-2 col-sm-2 col-md-2 nav-item">
        <a id="homeButton" class="navbar-btn btn btn-default" href="#">
          <span class="nav-link-text"><img id="homeLogo" src="/img/gardenGuruLogoMini.png"></span>
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
      <div class="top-jumbo jumbotron jumbtron-fluid">
        <div class="container">
          <h4>Guru Travis' Garden</h4>
          <div class="row">
            <div class="col-6">
              <p><span id="place"></span></p>
              <p><span id="weatherIcon"></span>: <span id="weatherDescription"></span></p>
            </div>
            <div class="col-6">
              <p id="time"></p>
              <p><span id="temperature"></span>F</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Icon Cards-->
      <div class="info-card row">
        <div class="col-md-12">
          <div class="card text-black secondary-color o-hidden h-100">
            <div class="card-body">
              <div class="row h-100">
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
              <a class="btn btn-success float-left" href="#">Buy Seeds</a>
              <a class="btn btn-success float-right" href="#">Learn More</a>
            </span>
          </div>
        </div>
      </div>

      <div class="info-card row">
        <div class="col-md-12">
          <div class="card text-black secondary-color o-hidden h-100">
            <div class="card-body">
              <div class="row h-100">
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
              <a class="btn btn-success float-left" href="#">Buy Seeds</a>
              <a class="btn btn-success float-right" href="#">Learn More</a>
            </span>
          </div>
        </div>
      </div>

      <div class="info-card row">
        <div class="col-md-12">
          <div class="card text-black secondary-color o-hidden h-100">
            <div class="card-body">
              <div class="row h-100">
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
              <a class="btn btn-success float-left" href="#">Buy Seeds</a>
              <a class="btn btn-success float-right" href="#">Learn More</a>
            </span>
          </div>
        </div>
      </div>

      <div class="info-card row">
        <div class="col-md-12">
          <div class="card text-black secondary-color o-hidden h-100">
            <div class="card-body">
              <div class="row h-100">
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
              <a class="btn btn-success float-left" href="#">Buy Seeds</a>
              <a class="btn btn-success float-right" href="#">Learn More</a>
            </span>
          </div>
        </div>
      </div>

      <div class="info-card row">
        <div class="col-md-12">
          <div class="card text-black secondary-color o-hidden h-100">
            <div class="card-body">
              <div class="row h-100">
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
              <a class="btn btn-success float-left" href="#">Buy Seeds</a>
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

<script type="text/javascript">
  
  $(document).ready(function() {

    function updateTime() {
      var currentTime = new Date();
      var hours = currentTime.getHours();
      var minutes = currentTime.getMinutes();
      var seconds = currentTime.getSeconds();

      if (minutes < 10) {
        minutes = "0" + minutes;
      }

      if (seconds < 10) {
        seconds = "0" + seconds;
      }

      var time_str = hours + ":" + minutes + ":" + seconds + " ";

      if (hours > 11) {
        time_str += "PM";
      } else {
        time_str += "AM";
      }

      $("#time").html(time_str);
    }

    updateTime();

    setInterval(updateTime, 1000);

    // function getCurrentLocation() {
    //   if (navigator.geolocation) {
    //     navigator.geolocation.getCurrentPosition(function(position) {
    //       var pos = {
    //         lat: position.coords.latitude,
    //         lng: position.coords.longitude
    //       }

    //       console.log(pos);
    //     }, function () {
    //       handleLocationError(true);
    //     });
    //   } else {
    //     handleLocationError(false);
    //   }
    // }

    // function handleLocationError(browserHasGeo) {
    //   alert(browserHasGeo ? "Error: The Geolocation service failed." : "Error: Your browser does not support geolocation.");
    // }

    // getCurrentLocation();


    // var apiGeolocationSuccess = function(position) {
    //   alert("API geolocation success!\n\nlat = " + position.coords.latitude + "\nlng = " + position.coords.longitude);
    // };

    var getWeatherForCoords = function(lat, lng) {
      $.get("http://api.openweathermap.org/data/2.5/weather", {lat: lat, lon: lng, units: "imperial", APPID: "8f4347b58a17858ab0eded6c34ac6fe2"}, function(data) {
        $("#place").html(data.name);
        $("#weatherIcon").html("<img src='http://openweathermap.org/img/w/" + data.weather[0].icon + ".png'></img>");
        $("#weatherDescription").html(data.weather[0].main);
        $("#temperature").html(parseInt(data.main.temp));
      });
    }

    var getAPIGeolocation = function() {
      $.post("https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyBe2RDvKFDOZXO1_U9QU3dVQoao0T_aWn4", function(success) {
        var coords = {
          latitude: success.location.lat,
          longitude: success.location.lng
        }

        getWeatherForCoords(coords.latitude, coords.longitude);
      }).fail(function(err) {
        console.log(err);
      });
    };

    getAPIGeolocation();
  });

</script>

</html>