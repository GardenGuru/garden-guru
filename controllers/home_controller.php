<?php
  class HomeController {
    public function home() {
      $first_name = 'Jon';
      $last_name  = 'Snow';
      require_once('views/home.php');
    }

    public function error() {
      require_once('views/error.php');
    }
  }
?>