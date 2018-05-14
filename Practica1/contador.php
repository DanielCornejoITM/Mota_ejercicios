
<?php
	include "conexion.php";
	$id_archivo = $_GET['id'];
$sql = "UPDATE archivos SET Conteo = Conteo + 1 WHERE ArchID = '$id_archivo'";
$conn->query($sql);
$conn->close();


?>