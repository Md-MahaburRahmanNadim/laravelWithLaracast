<?php
require 'function.php';
require 'Database.php';
// require 'router.php';
/*
// create a person class with breth method
class Person
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function greet($name)
    {
        return "Hello {$name}, my name is {$this->name}";
    }
}

// create a new person object
$person = new Person('Nadim', 30);
dd($person);
*/
// connect to the database and excute a query to fetch all the data via pdo ,dns and Database class

// let create a dynamic dns string to connect to the database
// let's send it upword to make this more dynamic
// $config = [
//     'host' => 'localhost',
//     'port' => '3306',
//     'dbname' => 'myapp',
//     'charset' => 'utf8mb4',
// ];
//  let's return this array from a config file
$config = require 'config.php';
// create a new database object
$db = new Database($config['database']);
$posts = $db->quary('select * from posts')->fetch(); // this fetch all the data from the database as a associative array
/*
create a database class or extract a database class 

// create pdo connection string with mysql
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=myapp;charset=utf8', 'root', '');
// set pdo error mode to exception
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // this is for debugging purpose
// create a query
$statement = $pdo->prepare('select * from posts'); // this prepare a query to be executed in the database via below statment
// execute the query
$statement->execute(); // this execute the query in the database
// fetch all the data from the database as a associative array
$posts = $statement->fetchAll(PDO::FETCH_ASSOC); // this fetch all the data from the database as a associative array
// this create a two dimensional array and reture all the rows
// dd($posts);
foreach ($posts as $post) {
    // print_r($post);
    echo '<li>' . $post['title'] . '</li>';
}


excersize 
Create a prepared statement to fetch the post that has an id of 1. Then, experiment with calling fetch() instead of fetchAll(). How is the output different?
$excersize = $pdo->prepare('select * from posts where id = 1');
$excersize->execute();
$excersize = $excersize->fetch(PDO::FETCH_ASSOC);// this create a single array and reture the first row
dd($excersize);
*/

foreach ($posts as $post) {
    // print_r($post);
    echo '<li>' .$post . '</li>';
}