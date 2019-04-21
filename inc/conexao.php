<?php
	
class Sql {
	
	public $conn;

	/* primeiro a ser executado*/
	public function __construct(){
		return $this->conn = mysqli_connect("127.0.0.1","root","87654321","banco_loja");
	}

	public function query($string_query){
		return mysqli_query($this->conn,$string_query);
	}
	public function __destruct(){
		mysqli_close($this->conn);
	}

}

?>