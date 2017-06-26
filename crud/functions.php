<?php
require_once('config.php');
require_once(DBAPI);
$anuncios = null;
$anuncio = null;
/**
 *  Listagem de Clientes
 */
function index() {
	global $anuncios;
	$anuncios = find_all('anuncios');
}
?>