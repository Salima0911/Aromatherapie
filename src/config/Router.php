<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$dir = explode('\public', $_SERVER['DOCUMENT_ROOT'])[0] . '/controllers/';

// var_dump($uri);
$routes = [
    '/' => 'HomeController.php',
    '/login' => 'LoginController.php',
    '/register' => 'RegisterController.php',
    '/politique' => 'PolitiqueController.php',
    '/recover' => 'RecoverController.php',
    '/membre' => 'MembreController.php',
    '/logout' => 'LogoutController.php'
];

if (array_key_exists($uri, $routes)) {
    require_once($dir . $routes[$uri]);
} else {
    http_response_code(404);
    require_once($dir . '404.php');
}
