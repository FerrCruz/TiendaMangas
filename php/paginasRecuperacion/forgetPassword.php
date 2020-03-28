<?php
    include("../connect.php");
	
    $dni = $_POST['documento'];
	
//Nos fijamos si el usuario existe
    
    if ($query = $conexion->prepare("SELECT COUNT(*) as existe, email FROM cuentas WHERE dni = ?")) {
        
        $query->bind_param("d",$dni); //ejecuatmos la query
        $query->execute();
        $query->bind_result($existe, $mail);
        $query->fetch();
        $query->close();

        if ($existe) { 
                   //Si existe
            if($query = $conexion->prepare("UPDATE cuentas SET codigo_recu = ?, tiempo = now() WHERE dni = ?")) {
                
                $query->bind_param("sd", $password, $dni);
                $password = substr(hash('sha256', $dni.Time()), 0, 10);
                $query->execute();
                $query->close();
                session_start();
                $_SESSION['dni'] = $dni;
				
				//header("Location: ");
                echo "OK";     
            }
            
        } else {
            //echo "<script>alert('Error. Ingrese nuevamente los datos');</script>";
            //header("Location: ../../subpaginas/paginasRecuperacion/pagina1DeRecuperacion.html");
            echo "NO";
        }  
    }

//    0 - correcto
//   1 - usuario incorrecto
?>