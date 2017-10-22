<?php
  class HomeController {
    public function home() {
      require_once('views/home.php');
    }

    public function signup() {
      require_once('views/signup.php');
    }

    public function doSignup() {
      User::store($_POST);
      $successOrFail = User::logIn($_POST['email'], $_POST['password']);
      $user = User::find($_SESSION['user']);
      require_once('views/onboard.php');
    }

    public function error() {
      require_once('views/error.php');
    }

    public function calendar() {
      require_once('views/calendar.php');
    }

    public function plantIndex() {
      require_once('views/plantIndex.php');
    }

    public function manage() {
      $user = User::find($_SESSION['user']);
      require_once('views/manage.php');
    }

    public function login() {
      require_once('views/login.php');
    }

    public function doLogin() {
      $successOrFail = User::logIn($_POST['email'], $_POST['password']);
      if ($successOrFail == "failure") {
        require_once('views/login.php');
      } else {
        $user = User::find($_SESSION['user']);
        require_once('views/manage.php');
      }
    }
  }
?>