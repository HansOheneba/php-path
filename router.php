<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
'/'=>'controllers/index.php',
'/about'=>'controllers/about.php',
'/contact'=>'controllers/contact.php',
'/mission'=>'controllers/mission.php',
];


routeToController($uri, $routes);

