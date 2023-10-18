<?php

use App\Controllers\PublicController;
use App\Router;

Router::addRoutes('/', [PublicController::class, 'index']);

Router::addRoutes('/about', function () {
    include 'views/about.php';
});