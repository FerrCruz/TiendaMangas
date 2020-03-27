<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$db = "VentaMangas";
	$port = "3306";
	$conexion = mysqli_connect($server, $user, $password, $db,$port);
	
	mysqli_set_charset($conexion, "utf8");

?>