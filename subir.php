<?php
function subirArchivo(){

include "conexion.php"; //Importa el archivo de conexión, el cuál conecta el proyecto con la base de datos

$target_path = "../conexiones/uploads/";

  //----------Subir cada uno de los archivos a la carpeta del servidor
    foreach ($_FILES['file_archivo']['name'] as $i => $name) { //file_archivo es la id del input type=file. El name así déjalo. 
      //----------- Subir la info de cada archivo a la base de datos------------
      $nombre = basename($_FILES['file_archivo']['name'][$i]);

      $url=basename($_FILES['file_archivo']['name'][$i]);

      $query = mysqli_query($con, "INSERT INTO archivo (url,nombre,id_carpeta) values ('$url', '$nombre', '$id_carpeta')");

      if (strlen($_FILES['file_archivo']['name'][$i]) > 1) { //Garantiza que la cant de caracteres del nombre sea mayor a 1 (No es esencial).
        if (move_uploaded_file($_FILES['file_archivo']['tmp_name'][$i], $target_path.$name)) { // Esta línea es la que sube el archivo en la posición que se indica o carpeta contenedora llamada $target_path. Es algo como la dirección $target_pat = "misdocumentos/carpeta2/".

        }else{echo "Error, no se han subido los archivos";}
      }
    }
}
  ?>