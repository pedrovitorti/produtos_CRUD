<?php 
include_once("views/menu.php");
?>
<section>
	 <div class="container" id="container_gerenciar">
		<form enctype="multipart/form-data" method="post" action="inc/insere_produto.php" >
			Nome: <br><input class="form-control" name="nome" type="text" placeholder="Nome Livro"  maxlength="100" required><br>
			Descrição: <br>  <textarea id="form7" name="descricao" class="md-textarea form-control" placeholder="Pequena Descrição do livro" rows="3" maxlength="200" required></textarea><br>
			Preço: <br><input type="number" class="form-control" name="preco" placeholder="9.90" required/><br>
			Imagem: <br><input class="form-control-file" type="file" name="file"><br>
			<input  class="btn btn-primary fonte_menus" type="submit" value="Adicionar Livro"/>
		
		</form>
	</div>
</section>

<?php 
include_once("views/rodape.php");
?>