
<?php

	include "conexion.php";

	$id_archivo = $_POST['id'];
	echo "id archivo = ".$id_archivo;

	$query = mysqli_query($conn, "UPDATE archivos SET Conteo = Conteo + 1 WHERE ArchID = '$id_archivo'");
?>