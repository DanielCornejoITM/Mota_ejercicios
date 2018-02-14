<?php

//include "conexion.php"; //Importa el archivo de conexión, el cuál conecta el proyecto con la base de datos

  $server="localhost";
  $username="root";
  $password="";
  $db='archivos';
  $con=@mysqli_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
  $sdb=@mysqli_select_db($con,$db)or die("la base de datos no existe");


$target_path = "uploads/";

  //----------Subir cada uno de los archivos a la carpeta del servidor
    foreach ($_FILES['file_archivo']['name'] as $i => $name) { //file_archivo es la id del input type=file. El name así déjalo. 
      //----------- Subir la info de cada archivo a la base de datos------------
      $nombre = basename($_FILES['file_archivo']['name'][$i]);

      $url=basename($_FILES['file_archivo']['name'][$i]);

      echo 'Nombre archivo: '.$nombre;

      $query = mysqli_query($con, "INSERT INTO archivos (Nombre, Ubicacion) values ('$nombre', '$url')");

      if (strlen($_FILES['file_archivo']['name'][$i]) > 1) { //Garantiza que la cant de caracteres del nombre sea mayor a 1 (No es esencial).
        if (move_uploaded_file($_FILES['file_archivo']['tmp_name'][$i], $target_path.$name)) { // Esta línea es la que sube el archivo en la posición que se indica o carpeta contenedora llamada $target_path. Es algo como la dirección $target_pat = "misdocumentos/carpeta2/".

        }else{echo "Error, no se han subido los archivos";}
      }
    }
?>