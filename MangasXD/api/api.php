<?php
    require_once "../php/conexionAPI.php";

    //$sql = "SELECT MangaID, Nombre, Autor, continente, Tomo, Precio, Imagen FROM Mangas";
     $sql = "SELECT MangaID, Nombre, Autor, Tomo, Precio, Imagen FROM Mangas";
     $respuesta = $conexion->query($sql);
         if($respuesta->rowCount() > 0){
            $tabla = array();
            while($row = $respuesta->fetch()) {
                
                $datos = array(
                    'MangaID' => (int) $row['MangaID'],
                    'Nombre' => $row['Nombre'],
                    'Autor' => $row['Autor'],
                    'Tomo' => $row['Tomo'],
                    'Precio' => (float) $row['Precio'],
                    'Imagen'=>  $row['Imagen']
                );
                array_push($tabla, $datos);
            }
        }
        echo json_encode($tabla);

    /*if ($query = $conexion->prepare("SELECT existe, MangaID, Nombre, Autor, Tomo, Precio, Imagen FROM Mangas")) {
        $query->execute();
        if($query->rowCount()>0){
            $tabla = array();
            while($row = $query->fetch()) {
                
                $datos = array(
                    'MangaID' => (int) $row['MangaID'],
                    'Nombre' => $row['Nombre'],
                    'Autor' => $row['Autor'],
                    'Tomo' => $row['Tomo'],
                    'Precio' => (float) $row['Precio'],
                    'Imagen'=>  $row['Imagen']
                );
                array_push($tabla, $datos);
            }
        }
        $query->close();
    }*/   
   
?>