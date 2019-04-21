<?php 
include_once("views/menu.php");
include_once("inc/consulta_produtos.php")
?>

<section>
    <div class="container" id="destaque-produtos-container">
    	
		<!-- div carossel-->	
		<div id="destaque-produtos">
			<?php 
			while($row = mysqli_fetch_array($result)){?>
			    <div class="item">
			    <div class="col-sm-6 col-image">
			    <img src="img/produtos/<?php echo utf8_encode($row['imagem'])?>" width="220" height="312" alt="Nome do produto">
			    </div>
			    <div class="col-sm-6 col-descricao">
			    <h2><?php echo utf8_encode($row['nome'])?></h2>
			    <div class="box-valor">
			    <div class="text-descricao text-arial-cinza ">
			   		<?php echo utf8_encode($row['descricao'])?>
			    </div><br>
			    <div class="text-por">por</div>
			    <div class="text-reais text-azul">R$</div>
			    <div class="text-valor text-azul"><?php echo utf8_encode($row['preco'])?></div>
			    <!--   <div class="text-valor-centavos text-azul">,90</div> -->
			    </div><br>
			    <a href="#" class="btn btn-comprar text-azul"><i class="fa fa-shopping-cart"></i> compre agora</a>
			    </div>
			    </div>
			<?php }
			
			?>		
			
			
		
		</div>
		<button type="button" id="btn-destaque-prev"><i class="fa fa-angle-left"></i></button>
		<button type="button" id="btn-destaque-next"><i class="fa fa-angle-right"></i></button>
</section>

<?php 
include_once("views/rodape.php");
?>

<script>
$(function(){

	$("#destaque-produtos").owlCarousel({
 
      autoPlay: 5000,
      items : 2,
      singleItem: true
 
  	});

  	var owlDestaque = $("#destaque-produtos").data('owlCarousel');

  	$('#btn-destaque-prev').on("click", function(){

  		owlDestaque.prev();

  	});

  	$('#btn-destaque-next').on("click", function(){

  		owlDestaque.next();

  	});

});
</script>