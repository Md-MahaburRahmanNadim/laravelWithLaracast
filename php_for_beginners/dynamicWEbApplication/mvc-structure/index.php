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

/*$posts = $db->quary('select * from posts where id = 1')->fetch(); // this fetch all the data from the database as a associative array
here we hard coded the id to 1 but in real world we will get the id from the url wchich is given by the user
there for we have to grab the user input from the url and pass it to the query via the help of $_GET super global variable. 

Remember that we can use the $_GET super global variable to access the query string parameters in the URL.

*/
$id = $_GET['id'];
/*
$posts = $db->quary("select * from posts where id = {$id}")->fetch(); 
Here we are taking what ever user type into that quary string for the id parameter and we are inserting it directly into the query. This is a security risk because it allows the user to inject SQL into our query. For example, if the user types in 1; DROP TABLE posts; into the URL, our query will become: select * from posts where id = 1; DROP TABLE posts; and the posts table will be dropped. To prevent this, we need to use prepared statements. Prepared statements are a way to execute a query with user input without the risk of SQL injection. To use a prepared statement, we need to use the prepare method on the PDO object. The prepare method takes a query string as an argument and returns a PDOStatement object. We can then use the execute method on the PDOStatement object to execute the query. The execute method takes an array of values as an argument. The values in the array will replace the placeholders in the query string. For example, if we have a query string like this: select * from posts where id = ? and we want to replace the ? with the value 1, we can do this: $statement = $pdo->prepare('select * from posts where id = ?'); $statement->execute([1]); The execute method will replace the ? with the value 1 and execute the query. We can then use the fetch method on the PDOStatement object to get the result of the query. We can also use the fetchAll method to get all the results of the query. We can also use the fetchColumn method to get the first column of the first row of the result. We can also use the fetchObject method to get the result as an object. We can also use the fetchAll method to get all the results of the query as objects. We can also use the fetchColumn method to get the first column of the first row of the result as an object. We can also use the fetchClass method to get the result as an object of a specific class. We can also use the fetchAll method to get all the results of the query as objects of a specific class. We can also use the fetchColumn method to get the first column of the first row of the result as an object of a specific class. We can also use the fetchInto method to get the result as an object of a specific class and set the properties of the object to the values of the columns. We can also use the fetchAll method to get all the results of the query as objects of a specific class and set the properties of the objects to the values of the columns. We can also use the fetchColumn method to get the first column of the first row of the result as an object of a specific class and set the properties of the object.*/
//solution
// $posts = $db->quary("select * from posts where id = :id")->fetch(); // this fetch all the data from the database as a associative array
$posts = $db->quary("select * from posts where id = ?",[$id])->fetch(); // this fetch all the data from the database as a associative array
/* here ? is a placeholder and we can pass the value of the id as an array to the execute method. Then the excute method will replace the ? with the value of the id. This is called prepared statement. This is a security feature to prevent sql injection. */


// dd($posts);
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
// dd($posts);

foreach ($posts as $post) {
  
    echo '<li>' .$post . '</li>';
}