<?php

error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);

require_once("conexao.php");

$id = $_POST['id'];
$acao = $_POST['acao'];

if($acao == "Excluir"){
    $sql = new Sql();
    $result = $sql->query("DELETE FROM tb_produtos WHERE id='$id';");
    header("Location:../gerenciar_produtos.php");
    
} else {
    header("Location:../config_bd/../paginas/editar_usuario.php");
    
}



?>