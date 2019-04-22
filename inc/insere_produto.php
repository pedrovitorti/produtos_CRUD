<?php

error_reporting(E_ALL);

/* Habilita a exibição de erros */
ini_set("display_errors", 1);

require_once("conexao.php");

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

$location = '../img/produtos/';
$name_img = $_FILES['file']['name'];
if (isset($_FILES['file'])) {
    $name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    
    $error = $_FILES['file']['error'];
    if ($error !== UPLOAD_ERR_OK) {
        echo 'Erro ao fazer o upload:', $error;
    } elseif (move_uploaded_file($tmp_name, $location . $name)) {
        echo 'Uploaded';
    }
} else {
    echo 'Selecione um arquivo para fazer upload';
}

$sql = new Sql();
$result = $sql->query("INSERT INTO `tb_produtos` VALUES(null,'$nome','$preco','$descricao','$name_img');");
header("Location:../gerenciar_produtos.php");

?>
