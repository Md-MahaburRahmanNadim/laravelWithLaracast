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
// connect to the database and excute a query to fetch all the data via pdo ,dns and Database class
class Database
{
    public $connection;
    public function __construct()
    {
        $dns = 'mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4;user=root;'; // this is the dns string to connect to the database
        $this->connection = new PDO($dns); // this create a pdo connection to the database and store it in the connection property
    }
    public function quary($quary)
    {
        // $statement = $this->connection->prepare('select * from posts'); here is a problem is the query is not flixebale to do that flexebality we use the below line
        $statement = $this->connection->prepare($quary); // this prepare a query to be executed in the database via below statment
        // return $statement->fetchAll(PDO::FETCH_CLASS); here also has a problem is that if we want a single row this always return a two dimensional array and reture all the rows so we use the below line and give the use to use fetch or fetchAll method as they want
         $statement->execute(); // and give the user to call the fetch or fetchAll method as they want via chaingin the method -> when the call the query method
        return $statement;
    }
}

// create a new database object
$db = new Database();
$posts = $db->quary('select * from posts')->fetch(PDO::FETCH_ASSOC); // this fetch all the data from the database as a associative array
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