<?php 
    include "conexion.php";

    $nombre = $_POST['newName'];
	$correo = $_POST['newEmail'];
	$contraseña = $_POST['newPass'];

	$query = mysqli_query($conn, "INSERT INTO usuarios(Nombre, Correo, Contra) VALUES ('$nombre','$correo','$contraseña')");

    if(!$query){
      echo 'No se pudo registrar el nuevo usuario'.$query;
    }
    else{
      echo '<center><h3>Usuario registrado de manera correcta</h3></br><a href="index.php">Iniciar sesión</a></center>';
      echo '<script>document.getElementById("login").style.display="block";</script>';
    }
?>