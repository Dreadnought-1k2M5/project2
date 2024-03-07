<?php

// connect to MySQL DB and execute a query.
class Database{
    public $connection;

    public function __construct($config, $username = 'root', $password = ''){

        //use this function to make a DSN string connection from the $config var.
        $dsn = 'mysql:' . http_build_query($config, '', ';'); // OUTPUT: mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4

        //Old DSN variable:
        //$dsn = "mysql:local={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";

        //the 4th argument means that the FETCH_ASSOC will be applied to all of the output of the query
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    
    public function query($query, $params = []){ // $params is an array containing user input (e.g. $_GET['id']; )

        $statement = $this->connection->prepare($query);
        $statement->execute($params); // binds $params array element(s) to the SQL query with '?' to prevent SQL injection vulnerability
        
        return $statement;
    }
}

