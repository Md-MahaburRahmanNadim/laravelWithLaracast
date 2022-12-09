<?php
// when we put class in a seperate file we need to name it with capital letter
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
