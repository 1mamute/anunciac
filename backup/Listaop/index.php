<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>CRUD php Mysql + bootstrap</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
						<span class="sr-only">Desplegar / Ocultar Menu</span>	
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">CRUD Sys</a>
				</div>
				<div class="collapse navbar-collapse" id="navegacion-fm">
					<ul class="nav navbar-nav">
						<li><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>							
						<li><a href="#"><span class="glyphicon glyphicon-plus-sign"></span>Registrarse</a></li>						
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href='#'><span class='glyphicon glyphicon-user'></span></a></li>										      
				    </ul>			
				</div>
			</div>
		</nav>
	</header>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<form action="index.php" method="post">
					<div class="form-group">	
						<label for="usu">Usuario:</label>
						<input class="form-control" id="usu" type="text" name="txtlogin" required="true">
					</div>

					<div class="form-group">
						<label for="pass">Password:</label>
						<input class="form-control" id="pass" type="password" name="txtpass" required="true">
					</div>
					
					<input type="submit" class="btn btn-primary" value="Ingresar">	
				</form>
				<br>
				<div class="msg" id="msg">
					
				</div>
			</div>
		</div>
	</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/metodos.js"></script>
</body>
</html>

<?php
	if(isset($_POST['txtpass'])) 
	{
		session_start();
		//variable de conexion: recibe dirección del host , usuario, contraseña y el nombre base de datos
		$mysqli = new mysqli("localhost", "root", "", "bdpersona") or die ("Error de conexion porque: ".$mysqli->connect_errno);
		// comprobar la conexión 
		if (mysqli_connect_errno()) 
		{
	    	printf("Falló la conexión: %s\n", mysqli_connect_error());
	   		exit();
		}

		$login = $mysqli->real_escape_string($_POST['txtlogin']);	
		$pass = $mysqli->real_escape_string($_POST['txtpass']);
		
		$resultado = $mysqli->query("SELECT * FROM tbusuario where login='$login' and pass='$pass' and activo!=0");
		$valida=$resultado->num_rows;
		if($valida != 0)
		{
			$datosUsu = $resultado->fetch_row();
			$_SESSION['nombreusu'] = $datosUsu[3];
			$_SESSION['perfil'] = $datosUsu[4];				
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=listar.php'>";
		}
		else
		{
			echo 
			"<script> 
				var textnode = document.createTextNode('Usuario ó Password Incorrecto');
				document.getElementById('msg').appendChild(textnode);
			</script>";
			
		}	
	}
	
	
?>

		