<?php 

require("config.php");



class Database {

	private $_dbHost = DB_HOST;
	private $_dbUsername = DB_USER;
	private $_dbPassword = DB_PASS;
	private $_dbName = DB_NAME;

	public function __construct() {

		try {

			$handler = new PDO('mysql:host=' . $this->_dbHost . ';dbname=' . $this->_dbName, $this->_dbUsername, $this->_dbPassword);

			$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		} catch(PDOException $e) {

			die('FAILED DB CONNECTION' . $e->getMessage());

		}

	}

}

$database = new Database;





// class Database {

//     public $connection;

//     public function __construct($dbHost, $dbUsername, $dbPassword, $dbName) {

//         $this->connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

//         if ($this->connection->connect_errno) {
//             die("DB CONNECTION FAILED " . $this->connection->connect_error);
//         }

//     }

//     public function query($sql) {

//     	return $result = $this->connection->query($sql);

//     }

//     public function escape_string($string) {

//     	return $this->connection->real_escape_string($string);

//     }



// }

// $database = new Database($dbHost, $dbUsername, $dbPassword, $dbName);

?>