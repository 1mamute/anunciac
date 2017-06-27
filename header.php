<?php
session_start();

require_once 'access/class.user.php';
$user_home = new USER();

if($user_home->is_logged_in())
{
	$stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=:uid");
	$stmt->execute(array(":uid"=>$_SESSION['userSession']));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
}


?>
<!DOCTYPE html>

 <html class="no-js"> 
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>anunciaC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />


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
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="header-inner">
					<h1><a href="index.php">anuncia<span>C</span></a></h1>
					<nav role="navigation">
						<ul>
							<?php if($user_login->is_logged_in())
							{
							echo "<li><font color='white'>Olá, {$row['userEmail']}.</font></li>
							<li><a href='anuncios.php'>Anúncios</a></li>
							<li><a href='criaranuncio.php'>Criar anúncio</a></li>
							<li><a href='meusanuncios.php'>Meus anúncios</a></li>		
							<li><a href='sobre.php'>Sobre nós</a></li>
                            <li class='cta'><a href='access/logout.php?logout'>Sair</a></li>";
							}
							else
							{
							echo "<li><a href='anuncios.php'>Anúncios</a></li>						
							<li><a href='sobre.php'>Sobre nós</a></li>
                            <li class='cta'><a data-toggle='modal' href='#login-form'>Entrar</a></li>";
							};?>
						</ul>
					</nav>
				</div>
			</div>
		</div>
</header>