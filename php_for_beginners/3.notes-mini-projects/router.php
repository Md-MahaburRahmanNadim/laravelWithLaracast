<?php
// create router with associtive array
// here home url is /laravel_with_laracast/php_for_beginners/3.notes-mini-projects/
$router = [
    '/laravel_with_laracast/php_for_beginners/3.notes-mini-projects/' => 'controllers/index.php',
    '/laravel_with_laracast/php_for_beginners/3.notes-mini-projects/about' => 'controllers/about.php',
    '/laravel_with_laracast/php_for_beginners/3.notes-mini-projects/contact' => 'controllers/contact.php',
    '/laravel_with_laracast/php_for_beginners/3.notes-mini-projects/notes' => 'controllers/notes.php',
    '/laravel_with_laracast/php_for_beginners/3.notes-mini-projects/note' => 'controllers/note.php',
    'names' => 'controllers/add-name.php',
];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// check if the request uri is in the router array
if (array_key_exists($uri, $router)) {
    require $router[$uri];
} else {
    require 'controllers/404.php';
}