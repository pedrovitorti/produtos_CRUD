<?php
	
class Sql {
	
	public $conn;

	/* primeiro a ser executado, criando conexao */
	public function __construct(){
		return $this->conn = mysqli_connect("127.0.0.1","root","87654321","banco_loja");
	}
    
	/* recebe consulta sql */
	public function query($string_query){
		return mysqli_query($this->conn,$string_query);
	}
	
	/* encerrar conexao */
	public function __destruct(){
		mysqli_close($this->conn);
	}

}

?>