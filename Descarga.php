<?php 
include "conexion.php";

	$id_archivo = $_GET['id'];
	$Descarga="";
$sql = "SELECT Ubicacion,Nombre FROM archivos where ArchID=".$id_archivo."";

$result = $conn->query($sql);

if ($result->num_rows == 1) {
	$Bandera=TRUE;
    while($row = $result->fetch_assoc()) {
        $Descarga=$row["Ubicacion"];
        $archivo=$row["Nombre"];        
    }
} 

$conn->close();
header("Content-disposition: attachment; filename=".$Descarga);
header('Content-Transfer-Encoding: binary');
header("Content-type: MIME");
ob_end_clean();
flush();
readfile($Descarga);
 ?>