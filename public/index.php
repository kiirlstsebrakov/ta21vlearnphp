<?php

// var_dumo($_SERVER);

spl_autoload_register(function ($class) {

    $class = substr($class, 4);
    require_once __DIR__ . "/../src/$class.php";
});

include __DIR__ . '/../routes.php';

$outer = new App\Router($_SERVER['REQUEST_URI']);
$match = $router->match();
if($match) {
    if (is_callable($match['action'])) {
        call_user_func($match['action']);
    } elseif (is_array($match['action']) && count($match['action']) === 2) {
        $class = $match['action'][0];
        $controller = new $class();
        $method = $match['action'][1];
        $controller->$method();
    } else {
        // throw error;
    }
} else {
    echo '404';
}