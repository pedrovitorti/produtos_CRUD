<?php
/* retornar todos os dados do banco */

error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);

require_once("conexao.php");

$sql = new Sql();

$result = $sql->query("SELECT * FROM tb_produtos;");


?>