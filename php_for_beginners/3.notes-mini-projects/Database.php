<?php
//create a config associative array

// convert a associtive array to a query string
class Database{
    public $connectoin ;
    function __construct($config,$password='',$user='root')
    {
        $dns = 'mysql:' . http_build_query($config, '', ';');
        $this->connection= new PDO($dns,$user,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }
    public function query($query,$parms=[])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($parms);
        return $statement;
    }
}