<?php
// $config = [
//     'host' => 'localhost',
//     'port' => '3306',
//     'dbname' => 'myapp',
//     'charset' => 'utf8mb4',
// ];
// let's return this array from a config file
return [
   'database' => ['host' => 'localhost',
    'port' => '3306',
    'dbname' => 'myapp',
    'charset' => 'utf8mb4',],
    'externalServices' => [
        'google' => 'http://google.com',
        'facebook' => 'http://facebook.com',
        'prerander' => [
            'token' => '123',
            'secret' => '456',
        ]
    ],
];
// when we input this file the we get the array as a result