<?php

    include("../connect.php");

    session_start();
    $dni = $_SESSION['dni'];
    $code = $_POST['codigo'];
    

    if ($query = $conexion->prepare("SELECT COUNT(*) as existe, codigo_recu, TIMESTAMPDIFF(minute, tiempo, now()) FROM cuentas WHERE dni = ?")) {
        $query->bind_param("d", $dni); //Ejecuta la query
        $query->execute();
        $query->bind_result($existe, $respaldo, $tiempo);
        $query->fetch();
        $query->close();

        if ($existe) {
            if ($tiempo <= 15) {
                if ($respaldo === $code) {
                   
                    //header("Location: ../../subpaginas/paginasRecuperacion/pagina3DeRecuperacion.html");
                    echo "OK";
                } else {
                    echo "NO";
                }       
            } else {
                echo 2;
            }          
        } else {       
            echo 3;    
        }  
    }

/*
    0 - correcto
    1 - codigo incorrecto
    2 - supero el tiempo limite
    3 - usuario incorrecto
*/

?>