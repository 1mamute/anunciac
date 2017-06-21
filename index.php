<?php
session_start();
require_once 'access/class.user.php';
$user_home = new USER();

/*if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}*/

$stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=:uid");
$stmt->execute(array(":uid"=>$_SESSION['userSession']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>

 <html class="no-js"> 
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Anuncia C</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />


	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<?php include('access/loginform.php');?>
	</head>
	<body>
	<div id="fh5co-page">
	<?php include('header.php');?>


	<aside id="fh5co-hero" clsas="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/slide_1.jpg);">
		   		<div class="container">
		   			<div class="col-md-12 text-center js-fullheight fh5co-property-brief slider-text">
		   				<div class="fh5co-property-brief-inner">
		   					<div class="fh5co-box">
		   						
		   						<h3><a href="#">Algum Lugar para alterar</a></h3>
		   						<div class="price-status">
                             	<span class="price">R$540,000 <a href="#" class="tag">A venda</a></span>
	                        </div>
	                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque dicta magni amet atque doloremque velit unde adipisci omnis hic quaerat.</p>

	                        <p class="fh5co-property-specification">
                        		<span><strong>3500</strong> Sq Ft</span>  <span><strong>3</strong> Quartos</span>  <span><strong>3.5</strong> Banheiros</span>  <span><strong>2</strong> Garagens</span>
                        	</p>

	                        <p><a href="#" class="btn btn-primary">Leia Mais</a></p>
									
	                        
	   						</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/slide_2.jpg);">
		   		<div class="container">
		   			<div class="col-md-12 text-center js-fullheight fh5co-property-brief slider-text">
		   				<div class="fh5co-property-brief-inner">
		   					<div class="fh5co-box">
		   						<h3><a href="#">15 Apartamentos</a></h3>
		   						<div class="price-status">
                             	<span class="price">R$2,200<span class="per">/Mês</span> <a href="#" class="tag">A venda</a></span>
	                        </div>
	                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque dicta magni amet atque doloremque velit unde adipisci omnis hic quaerat.</p>
	                        <p class="fh5co-property-specification">
                        		<span><strong>3500</strong> Sq Ft</span>  <span><strong>3</strong>Quartos</span>  <span><strong>3.5</strong> Banheiros</span>  <span><strong>2</strong> Garagens</span>
                        	</p>
	                        <p><a href="#" class="btn btn-primary">Leia Mais</a></p>
	   						</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
				<li style="background-image: url(images/slide_3.jpg);">
		   		<div class="container">
		   			<div class="col-md-12 text-center js-fullheight fh5co-property-brief slider-text">
		   				<div class="fh5co-property-brief-inner">
		   					<div class="fh5co-box">
		   						<h3><a href="#">Algum Lugar para Alterar</a></h3>
		   						<div class="price-status">
                             	<span class="price">R$1,540,000 <a href="#" class="tag">A venda</a></span>
	                        </div>
	                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque dicta magni amet atque doloremque velit unde adipisci omnis hic quaerat.</p>
	                        <p class="fh5co-property-specification">
                        		<span><strong>3500</strong> Sq Ft</span>  <span><strong>3</strong> Quartos</span>  <span><strong>3.5</strong> Banheiros</span>  <span><strong>2</strong> Garagens</span>
                        	</p>
	                        <p><a href="#" class="btn btn-primary">Leia Mais</a></p>


	   						</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	
		  	</ul>
	  	</div>
	</aside>
	<div id="best-deal">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
					<h2>We are Offering the Best Real Estate Deals</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">


					<div class="fh5co-property">
						<figure>
							<img src="images/slide_3.jpg" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
							<a href="#" class="tag">A venda</a>
						</figure>
						<div class="fh5co-property-innter">
							<h3><a href="#">Algum Lugar para alterar</a></h3>
							<div class="price-status">
		                 	<span class="price">R$540,000 </span>
		               </div>
		               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque dicta magni amet atque doloremque velit unde adipisci omnis hic quaerat.</p>
	            	</div>
	            	<p class="fh5co-property-specification">
	            		<span><strong>3500</strong> Sq Ft</span>  <span><strong>3</strong> Quartos</span>  <span><strong>3.5</strong> Banheiros</span>  <span><strong>2</strong> Garagens</span>
	            	</p>
					</div>

					
				</div>
				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">

					<div class="fh5co-property">
						<figure>
							<img src="images/slide_2.jpg" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
							<a href="#" class="tag">Para Alugar</a>
						</figure>
						<div class="fh5co-property-innter">
							<h3><a href="#">Algum Lugar para alterar</a></h3>
							<div class="price-status">
		                 	<span class="price">R$2,000<span class="per">Mês</span> </span>
		               </div>
		               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque dicta magni amet atque doloremque velit unde adipisci omnis hic quaerat.</p>
	            	</div>
	            	<p class="fh5co-property-specification">
	            		<span><strong>3500</strong> Sq Ft</span>  <span><strong>3</strong> Quartos</span>  <span><strong>3.5</strong> Banheiros</span>  <span><strong>2</strong> Garagens</span>
	            	</p>
					</div>
					
				</div>
				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">

					<div class="fh5co-property">
						<figure>
							<img src="images/slide_1.jpg" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
							<a href="#" class="tag">A venda</a>
						</figure>
						<div class="fh5co-property-innter">
							<h3><a href="#">Algum Lugar para alterar</a></h3>
							<div class="price-status">
		                 	<span class="price">R$1,540,000</span>
		               </div>
		               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque dicta magni amet atque doloremque velit unde adipisci omnis hic quaerat.</p>
	            	</div>
	            	<p class="fh5co-property-specification">
	            		<span><strong>3500</strong> Sq Ft</span>  <span><strong>3</strong> Quartos</span>  <span><strong>3.5</strong> Banheiros</span>  <span><strong>2</strong> Garagens</span>
	            	</p>
					</div>
				</div>


			</div>
		</div>
		
		
	</div>

	
	<div class="fh5co-section-with-image">
		
		
	
	
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

