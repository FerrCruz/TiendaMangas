<?php

    include("../connect.php");

    session_start();
    $newPassword = $_POST['password'];
    $newPassword2 = $_POST['password2'];
    $dni = $_SESSION['dni'];

    if($newPassword==$newPassword2){

        if($query = $conexion->prepare("UPDATE cuentas SET codigo_recu = null, tiempo = null, intentos = 0, contrasenia = ? WHERE dni = ?")) {
            //$hashNewPass = password_hash($newPassword, PASSWORD_DEFAULT); // Genera contraseña aleatoria alfanumerica con caracteres
            $query->bind_param("sd", $newPassword, $dni);
            $query->execute();
            $query->close();
    
            echo "OK";
            //header("Location: ../../subpaginas/paginasRecuperacion/pagina4DeRecuperacion.html");
        }
    }else{
        echo "NO";
    }
    
?>