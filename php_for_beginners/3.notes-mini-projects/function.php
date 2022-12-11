<?php
function dd($data)
{
   echo '<pre>';
    var_dump($data);
   echo '</pre>';
    die();
}
function uriIs($uri)
{
    return $uri === $_SERVER['REQUEST_URI'];
}
// create an abrot fn
function abort($code=404)
{
    http_response_code($code);
    require 'controllers/'.$code.'.php';
    die();
}