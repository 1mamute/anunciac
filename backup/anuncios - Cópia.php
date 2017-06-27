<?php
    require_once('crud/functions.php');
	include('header.php');
    index();
?>



	


<div class="fh5co-page-title" style="background-image: url(images/slide_6.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 animate-box">
					<h1><span class="colored">Todos</span> os anúncios</h1>
				</div>
			</div>
		</div>
	</div>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

		</br>
		<div class="container">
		
			<div class="row">
				
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
					<h2>Você deseja:</h2>
					<p><button type="button" class="btn btn-primary btn-lg">Comprar</button>
					<button type="button" class="btn btn-primary btn-lg">Alugar</button></p>
				</div>


		<?php if ($anuncios) : ?>
		<?php foreach ($anuncios as $anuncio) : ?>
								<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-property">
						<figure>
							<img src="images/slide_3.jpg" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
							<a href="#" class="tag"><?php echo $anuncio['tipo']; ?></a>
						</figure>
						<div class="fh5co-property-innter">
							<h3><a href="#"><?php echo $anuncio['nome']; ?></a></h3>
							<div class="price-status">
		                 	<span class="price"><?php echo $anuncio['valor']; ?></span>
		               </div>
		               <p><?php echo $anuncio['descricao']; ?></p>
	            	</div>
	            	<p class="fh5co-property-specification">
	            		<span><strong><?php echo $anuncio['area']; ?></strong> m²</span>  <span><strong><?php echo $anuncio['quartos']; ?></strong> Quarto(s)</span>  <span><strong><?php echo $anuncio['garagem']; ?></strong> Vaga(s) na Garagem</span>
	            	</p>
					</div>
									</div>
		<?php endforeach; ?>
		<?php else : ?>
			<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
			</tr>
		<?php endif; ?>
					


			</div>
		</div>

			<div class="row">
				<div class="col-md-12 text-center animate-box" data-animate-effect="fadeIn">
					<nav>
					  <ul class="pagination">
					    <li class="disabled">
					      <a href="#" aria-label="Previous">
					        <span aria-hidden="true">&laquo;</span>
					      </a>
					    </li>
					    <li class="active"><a href="#">1</a></li>
					    <li><a href="#">2</a></li>
					    <li><a href="#">3</a></li>
					    <li><a href="#">4</a></li>
					    <li><a href="#">5</a></li>
					    <li>
					      <a href="#" aria-label="Next">
					        <span aria-hidden="true">&raquo;</span>
					      </a>
					    </li>
					  </ul>
					</nav>
				</div>
			</div>
		</div>
	</div>

	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>