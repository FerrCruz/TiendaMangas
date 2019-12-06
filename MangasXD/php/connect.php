<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$db = "VentaMangas";
	
	$conexion = new mysqli($server, $user, $password, $db);
	
	$conexion->set_charset("utf8");

?>