	<?php
	

			$mysqli = new mysqli("localhost", "root", "", "bdpersona");	
			$nom = $_GET['nombre'];
			$edad = $_GET['edad'];
			$dir = $_GET['direccion'];						
			$sql = $mysqli->query("insert into tbcontactos (nombre, edad, direccion) values ('$nom', $edad, '$dir') ");			
			
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            alert("Contacto Registrado"); 
            </SCRIPT> 
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=listar.php">
