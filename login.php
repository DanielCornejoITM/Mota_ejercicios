<?php
session_start();
$Extra=0;
$sql='';
if (!isset($_SESSION['ID'])) {
  if ( !empty($_POST)) {
    $Correo = strtolower($_POST['Correo']);
    $Contra = $_POST['mot'];
    include "conexion.php";
    $sql="  SELECT PersID FROM `usuarios` where `Correo`='".$Correo."' and `Contra`='".$Contra."'";

    $resultado= $conn->query($sql);
    if ($resultado->num_rows !=1) {
      header('Location: index.php');
    
    }
    else {
        $Extra=1;
     while($row = $resultado->fetch_assoc()) {
      $_SESSION['ID']=$row["PersID"];
           header('Location: Archivos.php');
    }
  }
  $conn->close();
}
}
else{
       header('Location: Archivos.php');
}
?>