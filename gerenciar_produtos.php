<?php 
include_once("views/menu.php");
include_once("inc/consulta_produtos.php")
?>
<section>
	 <div class="container" id="container_gerenciar">
	 	<a href="add_produto.php"class="pull-right"> + Adicionar novo produto</a><br><br>		
	 	<table class="table">
			<thead>
				<tr>
					<th scope="col">Nome do livro</th>
					<th scope="col">Valor</th>
					<th scope="col">Ação</th>
				</tr>
			</thead>
			<tbody>
					<?php while($row = mysqli_fetch_array($result)){ ?>
					<form method="post" action="inc/deleta_produto.php">
						<tr>
    						<input type='hidden' name='id' value='<?php echo $row['id'];  ?>'>
					    	<td><?php echo utf8_encode($row['nome']); ?></td>
					    	<td><?php echo utf8_encode($row['preco']); ?></td>
        			
        					<td>
        					
        					<input name='acao' class="btn btn-primary fonte_menus" type="submit" value="Excluir"/>
        					<a href='editar_produto.php?id=<?php echo $row['id']; ?>'><input name='acao' class="btn btn-primary fonte_menus" type="button" value="Editar"/></a>
        					</td>
        				</form>
        				</tr>	
    				<?php } ?>			
    		</tbody>
		</table>		
	 </div>
	 
</section>

<?php 
include_once("views/rodape.php");
?>