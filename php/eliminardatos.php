<?php

	include("connect.php");
	$id = $_POST['id'];

	$query = $conexion->prepare("DELETE FROM mangas where MangaID = ?");
    $query->bind_param("d",$id);
    $query->execute();
    $query->close();
	echo ("OK");
	
?>