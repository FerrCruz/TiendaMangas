<?php
	include("connect.php");
	
	$titulo = "";
	$autor = "";
	$tomo = "";
	$precio = "";
	$imagen = "";
	
		
	//AGREGAR
	if(isset($_POST['botonAgregar'])) {
		$titulo = $_POST['Titulo'];
		$autor = $_POST['Autor'];
		$tomo = $_POST['Tomo'];
		$precio = $_POST['Precio'];
		$imagen= $_POST['Imagen'];

		$query = $conexion->prepare("INSERT INTO mangas VALUES('',?,?,?,?,?)");
        $query->bind_param("sssss", $titulo,$autor,$tomo,$precio,$imagen);
        $query->execute();
        $query->close();
		header('Location: ../subpaginas/panelDeMangas.php');
			
		}

	//EDITAR
	if(isset($_POST['botonEditar'])) {
		$titulo = $_POST['Titulo'];
		$autor = $_POST['Autor'];
		$tomo = $_POST['Tomo'];
		$precio = $_POST['Precio'];
		$imagen= $_POST['Imagen'];

		$query = $conexion->prepare("SELECT mangaId from mangas where nombre = ?");
		$query->bind_param("s", $titulo);
	    $query->execute();
	    $query->bind_result($id);
		$query->fetch();
	    $query->close();

		$query = $conexion->prepare("UPDATE mangas 
									 SET nombre=?, autor=?, tomo=?,precio=?, imagen=? 
									 WHERE mangaId=?");

	    $query->bind_param("ssssss", $titulo,$autor,$tomo,$precio,$imagen,$id);
	    $query->execute();
	    $query->close();
		header('Location: ../subpaginas/panelDeMangas.php');
			
	}

	//BORRAR
	if(isset($_POST['botonEliminar'])) {
		$titulo = $_POST['Titulo'];
		$autor = $_POST['Autor'];

		$query = $conexion->prepare("SELECT mangaId from mangas where nombre = ? and autor = ?");
		$query->bind_param("ss", $titulo, $autor);
	    $query->execute();
	    $query->bind_result($id);
		$query->fetch();
	    $query->close();
		
		$query = $conexion->prepare("DELETE FROM mangas where mangaId = ?");
        $query->bind_param("s",$id);
        $query->execute();
        $query->close();
		header('Location: ../subpaginas/panelDeMangas.php');
		}
			
?>