<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// echo $uri;

// if ( $uri === '/laravel_with_laracast/php_for_beginners/dynamicWEbApplication/mvc-structure/') {
//     require 'controllers/index.php';
// } elseif ($uri === '/laravel_with_laracast/php_for_beginners/dynamicWEbApplication/mvc-structure/about') {
//     require 'controllers/about.php';
// } elseif ($uri === '/laravel_with_laracast/php_for_beginners/dynamicWEbApplication/mvc-structure/contact') {
//     require 'controllers/contact.php';
// } else {
//     echo '404';
// }
// create route with associative array and access to controllers
$routes = [
    '/laravel_with_laracast/php_for_beginners/dynamicWEbApplication/mvc-structure/' => 'controllers/index.php',
    '/laravel_with_laracast/php_for_beginners/dynamicWEbApplication/mvc-structure/about' => 'controllers/about.php',
    '/laravel_with_laracast/php_for_beginners/dynamicWEbApplication/mvc-structure/contact' => 'controllers/contact.php',
    '/names' => 'controllers/add-name.php'
];
function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        // abort();
        echo '444';
    }
}
// check if the route exist
// function abort($code = 404){
//     http_response_code($code);
//     require 'views/{$code}.php';
//     die();
// }

routeToController($uri, $routes);
?>