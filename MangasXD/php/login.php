<?php 
	include("connect.php");
	
	$user     = $_POST['user'];
	$password = $_POST['pass'];

	if ($query = $conexion->prepare("SELECT COUNT(*) as existe FROM cuentas WHERE usuario = ? and contrasenia = ?")) {
		$query->bind_param("ss", $user,$password);
        $query->execute();
        $query->bind_result($existe);
        $query->fetch();
        $query->close();

		if ($existe){
		        session_start();
		       	$_SESSION['user'] = $user;
		       	$_SESSION["pass"] = $pass;
		       	$_SESSION["iniciado"] = true;

		       	header("Location: ../index.php");
			
		    } else {
		        header("Location: ../subpaginas/login.html");
		    }  
	}
?>