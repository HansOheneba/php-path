<?php

const BASE_PATH = __DIR__.'/../';

// require BASE_PATH . '/vendor/autoload.php';

require BASE_PATH . 'Core/functions.php';

session_start();


spl_autoload_register(function ($class) {

    $class = str_replace('\\', '/', $class);
  
    // dd($classPath);

    require base_path($class . '.php');
});

require base_path('views/bootstrap.php');


$router = new \Core\Router;

$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);

