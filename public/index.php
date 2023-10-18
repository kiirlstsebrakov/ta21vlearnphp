<?php

// var_dumo($_SERVER);

spl_autoload_register(function ($class) {

    $class = substr($class, 4);
    require_once __DIR__ . "/../src/$class.php";
});

include __DIR__ . '/../routes.php';

$outer = new App\Router($_SERVER['REQUEST_URI']);