<?php
	session_start();
	if(isset($_SESSION['nombreusu']))
	{
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>CRUD php Mysql + bootstrap</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">	
	<script src="js/metodos.js"></script>
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
					<a href="#" class="navbar-brand">Contactos</a>
				</div>
				<div class="collapse navbar-collapse" id="navegacion-fm">
					<ul class="nav navbar-nav">
						<li><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>							
						<li><a href="cerrars.php"><span class="glyphicon glyphicon-remove"></span>Salir</a></li>						
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<?php								
							echo "<li><a href='#'><span class='glyphicon glyphicon-user'></span> ".$_SESSION['nombreusu']."</a></li>";
						?>				      
				    </ul>			
				</div>
			</div>
		</nav>
	</header>

	<div class="container">
		<div class="row">	
	

	
				
			<a class="btn btn-success" data-toggle="modal" data-target="#nuevoUsu">Nuevo Contacto</a><br><br>
			<table class='table'>
				<tr>
					<th>Id</th><th>Nombre</th><th>Edad</th><th>Direccion</th><th><span class="glyphicon glyphicon-wrench"></span></th>
				</tr>			
<?php
			$mysqli = new mysqli("localhost", "root", "", "bdpersona");		
			if ($mysqli->connect_errno) {
			    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			    exit();
			}
			$consulta= "SELECT * FROM tbcontactos";
			if ($resultado = $mysqli->query($consulta)) 
			{
				while ($fila = $resultado->fetch_row()) 
				{					
					echo "<tr>";
					echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td>";	
					echo"<td>";						
				    echo "<a data-toggle='modal' data-target='#editUsu' data-id='" .$fila[0] ."' data-nombre='" .$fila[1] ."' data-edad='" .$fila[2] ."' data-direccion='" .$fila[3] ."' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span>Editar</a> ";			
					echo "<a class='btn btn-danger' href='elimina.php?id=" .$fila[0] ."'><span class='glyphicon glyphicon-remove'></span>Eliminar</a>";		
					echo "</td>";
					echo "</tr>";
				}
				$resultado->close();
			}
			$mysqli->close();			
			
	

?>
	        </table>
		</div> 



		<div class="modal" id="nuevoUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Nuevo Contacto</h4>                       
                    </div>
                    <div class="modal-body">
                       <form action="insertar.php" method="GET">              		
                       		<div class="form-group">
                       			<label for="nombre">Nombre:</label>
                       			<input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre"></input>
                       		</div>
                       		<div class="form-group">
                       			<label for="edad">Edad:</label>
                       			<input class="form-control" id="edad" name="edad" type="text" placeholder="Edad"></input>
                       		</div>
                       		<div class="form-group">
                       			<label for="direccion">Direccion:</label>
                       			<input class="form-control" id="direccion" name="direccion" type="text" placeholder="Direccion"></input>
                       		</div>

							<input type="submit" class="btn btn-success" value="Salvar">
                       </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div> 

        <div class="modal" id="editUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Editar Contacto</h4>
                    </div>
                    <div class="modal-body">                      
                       <form action="actualiza.php" method="POST">                       		
                       		        
                       		        <input  id="id" name="id" type="hidden" ></input>   		
		                       		<div class="form-group">
		                       			<label for="nombre">Nombre:</label>
		                       			<input class="form-control" id="nombre" name="nombre" type="text" ></input>
		                       		</div>
		                       		<div class="form-group">
		                       			<label for="edad">Edad:</label>
		                       			<input class="form-control" id="edad" name="edad" type="text" ></input>
		                       		</div>
		                       		<div class="form-group">
		                       			<label for="direccion">Direccion:</label>
		                       			<input class="form-control" id="direccion" name="direccion" type="text" ></input>
		                       		</div>

									<input type="submit" class="btn btn-success">							
                       </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div> 



	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>		
	<script>			 
		  $('#editUsu').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var recipient0 = button.data('id')
		  var recipient1 = button.data('nombre')
		  var recipient2 = button.data('edad')
		  var recipient3 = button.data('direccion')
		   // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		 
		  var modal = $(this)		 
		  modal.find('.modal-body #id').val(recipient0)
		  modal.find('.modal-body #nombre').val(recipient1)
		  modal.find('.modal-body #edad').val(recipient2)
		  modal.find('.modal-body #direccion').val(recipient3)		 
		});
		
	</script>
	
</body>
</html>

<?php
	}
	else
	{
		?>
		 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php">
		 <?php
	}
?>