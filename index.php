<?php 
include_once("views/menu.php");
?>

<section>
    <div class="container" id="destaque-produtos-container">
    	
		<!-- div carossel-->	
		<div id="destaque-produtos">		
			<div class="item">
				<div class="col-sm-6 col-image">
					<img src="img/produtos/livro01.jpg" width="220" height="312" alt="Nome do produto">
				</div>
				<div class="col-sm-6 col-descricao">
					<h2>As Aventuras de Sherlock Holmes</h2>
					<div class="box-valor">
						<div class="text-descricao text-arial-cinza ">
							Essa luxuosa edição de bolso de As aventuras de Sherlock Holmes traz preço reduzido e 50 ilustrações originais de Sidney Paget. 
							A versão impressa apresenta ainda capa dura e acabamento de luxo.
						</div><br>
						<div class="text-por">por</div>
						<div class="text-reais text-azul">R$</div>
						<div class="text-valor text-azul">9</div>
						<div class="text-valor-centavos text-azul">,90</div>
					</div><br>
					<a href="#" class="btn btn-comprar text-azul"><i class="fa fa-shopping-cart"></i> compre agora</a>
				</div>
			</div>
			
			<div class="item">
				<div class="col-sm-6 col-image">
					<img src="img/produtos/livro02.jpg" width="220" height="312" alt="Nome do produto">
				</div>
				<div class="col-sm-6 col-descricao">
					<h2>20 Mil Léguas Submarinas</h2>
					<div class="box-valor">
						<div class="text-descricao text-arial-cinza ">
							Obra mais famosa de Jules Verne e um clássico da literatura mundial Essa edição traz o texto integral da obra em 
							tradução primorosa de André Telles e cerca de 30 ilustrações originais. A versão impressa apresenta ainda capa dura e acabamento de luxo. 
						</div><br>
						<div class="text-por">por</div>
						<div class="text-reais text-azul">R$</div>
						<div class="text-valor text-azul">9</div>
						<div class="text-valor-centavos text-azul">,90</div>
					</div><br>
					<a href="#" class="btn btn-comprar text-azul"><i class="fa fa-shopping-cart"></i> compre agora</a>
				</div>
			</div>
			
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