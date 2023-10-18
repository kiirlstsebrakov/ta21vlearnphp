<?php
namespace App\Controllers;

class PublicController {
     public function index() {
        include 'views/index.php';
    }

    public function about() {
        include 'views/about.php';
    }
}