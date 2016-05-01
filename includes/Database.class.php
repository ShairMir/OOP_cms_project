<?php 

require("config.php");

class Database {

	public $handler;

	public function __construct() {

		try {

			$this->handler = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);

			$this->handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		} catch(PDOException $e) {

			die('FAILED DB CONNECTION' . $e->getMessage());

		}

	}


}
