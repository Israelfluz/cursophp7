<?php
// PDO - DAO

class Sql extends PDO {

	private $conn;

	public function __construct(){

		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

	}

	private function setParams($statements, $paramanters = array()){

		foreach ($paramanters as $key => $value) {

			$this->setParam($statements, $key, $value);

		}

	}

	private function setParam($statement, $key, $value){

		$statement->bindParam($key, $value);

	}

	public function query($rawQuery, $params = array()){

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;

	}

	public function select($rawQuery, $params = array()):array
	{

		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);




	}


}



?>