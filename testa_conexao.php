<?php

error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);

require_once("inc/conexao.php");

$sql = new Sql();

$result = $sql->query("SELECT * FROM tb_produtos;");

while($row = mysqli_fetch_array($result)){
	var_dump($row[1]);
}

exit;

?>