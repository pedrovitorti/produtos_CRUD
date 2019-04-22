<?php 
include_once("views/menu.php");
require_once("inc/conexao.php");

$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
$sql = new Sql();
$result = $sql->query("SELECT * FROM tb_produtos WHERE id='$id';");

?>

<section>
	 <div class="container" id="container_gerenciar">
	 	<?php while($row = mysqli_fetch_array($result)){ ?>
		<form enctype="multipart/form-data" method="post" action="inc/edita_produto.php">
			<input type='hidden' name='id' value='<?php echo $id?>'>
			<b>Nome:</b> <br><input class="form-control" name="nome" type="text" value='<?php echo utf8_encode($row['nome']);  ?>'  maxlength="100" required><br>
			<b>Descrição:</b> <br>  <textarea type="text" id="form7" name="descricao" class="md-textarea form-control" rows="3" required><?php echo utf8_encode($row['descricao']); ?></textarea><br>
			<b>Preço:</b> <br><input type="number" class="form-control" name="preco" value='<?php echo utf8_encode($row['preco']);  ?>' required/><br>
			<b>Imagem:</b> <br><input class="form-control-file" type="file" name="file"><br>
			<input  class="btn btn-primary fonte_menus" type="submit" value="Adicionar Livro"/>
		
		</form>
		<?php } ?>	
	</div>
</section>

<?php 
include_once("views/rodape.php");
?>