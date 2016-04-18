<?php 

require("config.php");

class Database {

    public $connection;

    public function __construct($dbHost, $dbUsername, $dbPassword, $dbName) {

        $this->connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        if ($this->connection->connect_errno) {
            die("DB CONNECTION FAILED " . $this->connection->connect_error);
        }

    }

    public function query($sql) {

    	return $result = $this->connection->query($sql);

    }

    public function escape_string($string) {

    	return $this->connection->real_escape_string($string);

    }



}

$database = new Database($dbHost, $dbUsername, $dbPassword, $dbName);

?>