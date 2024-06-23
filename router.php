<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
'/'=>'controllers/index.php',
'/about'=>'controllers/about.php',
'/contact'=>'controllers/contact.php',
'/mission'=>'controllers/mission.php',
'/notes'=>'controllers/notes.php',
'/note'=>'controllers/note.php',
];


routeToController($uri, $routes);

