<?php
  include 'models/user.php';

  class HomeController {
    public function home() {
      require_once('views/home.php');
    }

    public function signup() {
      $first_name = 'Travis';
      require_once('views/signup.php');
    }

    public function doSignup() {
      User::store($_POST);
      require_once('views/onboard.php');
    }

    public function error() {
      require_once('views/error.php');
    }
  }
?>