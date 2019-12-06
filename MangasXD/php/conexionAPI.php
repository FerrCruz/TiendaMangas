<?php
	$db_server = "localhost";
	$db_user = "root";
	$db_password = "";
	$db = "VentaMangas";
	
	try{
		
		$conexion = new PDO('mysql:host=localhost; dbname=VentaMangas', $db_user, $db_password);
		
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$conexion->exec("SET CHARACTER SET utf8");
		
	} catch(Exception $e) {
		
		die('Error: ' . $e->GetMessage());
		
	}	
?>