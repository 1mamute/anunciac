<?php
    require_once('crud/functions.php');
	include('header.php');
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


		</br>
		<div class="container">
		
			<div class="row">
				
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
					<h2>Você deseja:</h2>
					<p><button type="button" class="btn btn-primary btn-lg">Comprar</button>
					<button type="button" class="btn btn-primary btn-lg">Alugar</button></p>
				</div>


<?php 
	$anuncio = null;
	$database = open_database();
	$table = 'tbl_anuncios';
	$result = mysqli_query($database, "SELECT * FROM " .$table. " WHERE statusAnuncio='1'");		  
	while($anuncio = mysqli_fetch_array($result)){
		echo "<div class='col-md-4 item-block animate-box' data-animate-effect='fadeIn'>";
		echo "<div class='fh5co-property'>";
		echo "<figure><img src='images/slide_3.jpg' alt='Free Website Templates FreeHTML5.co' class='img-responsive'><a href='#' class='tag'>".$anuncio['tipo']."</a></figure>";
		echo "<div class='fh5co-property-innter'>";
		echo "<h3><a href='#'>".$anuncio['nome']."</a></h3>";
		echo "<div class='price-status'>";
		echo "<span class='price'>".$anuncio['valor']."</span>";
		echo "</div>";
		echo "<p>".$anuncio['descricao']."</p>";
		echo "</div>";
		echo "<p class='fh5co-property-specification'>";
		echo "<span><strong>".$anuncio['area']."</strong> m²</span>  <span><strong>".$anuncio['quartos']."</strong> Quarto(s)</span>  <span><strong>".$anuncio['garagem']."</strong> Vaga(s) na Garagem</span>";
		echo "</p>";
		echo "</div>";
		echo "</div>";
}; 
	close_database($database); ?>
						

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