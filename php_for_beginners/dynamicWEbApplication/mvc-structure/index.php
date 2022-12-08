<?php
require 'function.php';
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
// dd($posts);
foreach ($posts as $post) {
    // print_r($post);
    echo '<li>' . $post['title'] . '</li>';
}
