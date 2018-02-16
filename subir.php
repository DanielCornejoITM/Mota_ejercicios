<?php
session_start();
//include "conexion.php"; //Importa el archivo de conexión, el cuál conecta el proyecto con la base de datos
include"conexion.php";


$target_path = "/opt/lampp/htdocs/uploads/";

  //----------Subir cada uno de los archivos a la carpeta del servidor
    foreach ($_FILES['file_archivo']['name'] as $i => $name) { //file_archivo es la id del input type=file. El name así déjalo. 
      //----------- Subir la info de cada archivo a la base de datos------------
      $nombre = basename($_FILES['file_archivo']['name'][$i]);

      $url=basename($_FILES['file_archivo']['name'][$i]);

      $query = mysqli_query($conn, " INSERT INTO  archivos ( PerID, Nombre, Ubicacion, Conteo) VALUES (".$_SESSION['ID'].",'$nombre','".$target_path.$url."',0)");
      echo $query;

      if (strlen($_FILES['file_archivo']['name'][$i]) > 1) { //Garantiza que la cant de caracteres del nombre sea mayor a 1 (No es esencial).
        echo "HOLA!!";
        echo $_FILES['file_archivo']['tmp_name'][$i], $target_path.$name;

        echo "HOLA!!";
        if (move_uploaded_file($_FILES['file_archivo']['tmp_name'][$i], $target_path.$name)) { // Esta línea es la que sube el archivo en la posición que se indica o carpeta contenedora llamada $target_path. Es algo como la dirección $target_pat = "misdocumentos/carpeta2/".
        echo "Aqui si entro LOL";

        }else{echo "Error, no se han subido los archivos";
        echo exec('whoami');}

      }
    }
    $conn->close();
?>
