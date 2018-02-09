<?php
session_start();
if (!isset($_SESSION['ID'])) {
  if ( !empty($_POST)) {
    $Correo = strtolower($_POST['Correo']);
    $Contra = $_POST['mot'];


    include "conexion.php";
    $sql="  SELECT PersID FROM `usuarios` where `Correo`='".$Correo."' and `Contra`='".$Contra."'";
    $resultado= $conn->query($sql);
    if ($resultado->num_rows !=1) {
      $Extra=0;
    }
    else {
     while($row = $resultado->fetch_assoc()) {
      $_SESSION['ID']=$row["PersID"];
    }
  }
  $conn->close();
}
}
if($Extra==0){
  header('Location: index.php');
exit;
}
?>


