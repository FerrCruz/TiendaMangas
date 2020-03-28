<?php
	include("connect.php");
	
	$titulo = $_POST['Titulo'];
	$autor = $_POST['Autor'];
	$tomo = $_POST['Tomo'];
	$precio = $_POST['Precio'];
	$imagen= $_POST['Imagen'];
	
	//Verifica si es distinto de null en cada una de las variables
	if (!($titulo == null OR $autor == null OR $tomo == null OR $precio == null OR $imagen == null)){
		//AGREGAR
		//if(isset($_POST['botonAgregar'])) {
			$imagen2 = "img/$imagen";

			$query = $conexion->prepare("INSERT INTO mangas VALUES('',?,?,?,?,?)");
			$query->bind_param("sssss", $titulo,$autor,$tomo,$precio,$imagen2);
			$query->execute();
			$query->close();
			header("Status: 301 Moved Permanently");
			header('Location: ../subpaginas/panelDeMangas.php');

			$carpetaDestino="../img/";

			//Verifica si se subio la imagen
			if(isset($_FILES["archivo"]) && $_FILES["archivo"]["name"]){
				//Limita los tipos de imagen
				if(($_FILES["archivo"]["type"]=="image/jpeg" || $_FILES["archivo"]["type"]=="image/jpg" || $_FILES["archivo"]["type"]=="image/png") && $_FILES["archivo"]["size"]<360000){
					if(file_exists($carpetaDestino) || @mkdir($carpetaDestino)){
						$origen=$_FILES["archivo"]["tmp_name"];
						$destino=$carpetaDestino.$_FILES["archivo"]["name"];
						if(@move_uploaded_file($origen, $destino)){
							echo "<br>".$_FILES["archivo"]["name"]." movido correctamente";
						}else{
							echo "<br>No se ha podido mover el archivo: ".$_FILES["archivo"]["name"];
						}
					}else{
						echo "<br>No se ha podido crear la carpeta: ".$carpetaDestino;
					}
				}else{
					echo "<br>".$_FILES["archivo"]["name"]." - No es imagen jpg, png o pesa más que 360kb";
				}
			}else{
				echo "<br>No se ha subido ninguna imagen";
			}
		//}
	}
	

	// //EDITAR
	// if(isset($_POST['botonEditar'])) {
	// 	$titulo = $_POST['Titulo'];
	// 	$autor = $_POST['Autor'];
	// 	$tomo = $_POST['Tomo'];
	// 	$precio = $_POST['Precio'];
	// 	$imagen= $_POST['Imagen'];

	// 	$query = $conexion->prepare("SELECT mangaId from mangas where nombre = ?");
	// 	$query->bind_param("s", $titulo);
	//     $query->execute();
	//     $query->bind_result($id);
	// 	$query->fetch();
	//     $query->close();

	// 	$query = $conexion->prepare("UPDATE mangas 
	// 								 SET nombre=?, autor=?, tomo=?,precio=?, imagen=? 
	// 								 WHERE mangaId=?");

	//     $query->bind_param("ssssss", $titulo,$autor,$tomo,$precio,$imagen,$id);
	//     $query->execute();
	//     $query->close();
	// 	header('Location: ../subpaginas/panelDeMangas.php');
			
	// }
			
?>