<?php

// Connect to the database and execute a queries
class Database 
{
    public $connection;

    public function __construct($config, $username = 'root', $password = '') {
        // connect to our   database

        $dsn = 'mysql:' . http_build_query($config, '', ';');
        // $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params) {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement;
    }

    public function assoc_array() {
        
    }

}