<?php

session_start();

	$mysqli = new mysqli("localhost", "root", "", "bdpersona");	
	
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$edad =  $_POST['edad'];
	$direccion =  $_POST['direccion'];	

	$sql = $mysqli->query("update tbcontactos set nombre='$nombre', edad=$edad, direccion='$direccion' where id=$id");
?>	

	 <SCRIPT LANGUAGE="javascript"> 
         alert("Contacto Actualizado"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=listar.php">


