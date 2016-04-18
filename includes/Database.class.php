<?php

class Database {

    public $connection;

    public function __construct($dbHost, $dbUsername, $dbPassword, $dbName) {

        $this->connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        if ($this->connection->connect_errno) {
            die("DB CONNECTION FAILED" . $this->connection->connect_error);
        }

    }

    public function query($sql) {

    	$query = mysqli_query($this->connection, $sql);

    }

    

}

$database = new Database($dbHost, $dbUsername, $dbPassword, $dbName);

?>