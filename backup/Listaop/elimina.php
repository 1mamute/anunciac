<?php

session_start();
if(isset($_SESSION['nombreusu']))
{
	$id = $_GET['id'];
	$mysqli = new mysqli("localhost", "root", "", "bdpersona");		
	$sql = $mysqli->query("delete from tbcontactos where id='$id'");	
	echo "eliminado";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=listar.php'>";
}
else
	{
			echo "<script language='javascript'> alert('No Tiene Permisos'); </script>";
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=index.php'>";
	}		 

?>