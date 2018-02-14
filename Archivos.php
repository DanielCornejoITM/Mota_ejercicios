
<?php

session_start();
if (!isset($_SESSION['ID'])) {
header("Location:index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
  <script src="js/jquery-3.2.1.min.js"></script>
	<title></title>
</head>
<body>


	<form method="post" id="frm_addfile" enctype="multipart/form-data" >
<input type="file" class="file" id="file_archivo" name="file_archivo[]" multiple="true" style="width: 400px;">
<input type="button" class="btn btn-info" value="Subir" onclick="registrar_archivo()"/>
</form>




<script type="text/javascript">
	

	function registrar_archivo(){
    alert("Entra registrar_Archivo js");
  //Envía el tipo de funcion a través de un input, y se manda mediante todo el paquete del formulario ;)
  var formData = new FormData(document.getElementById("frm_addfile")); //Guardamos todo el contenido del formulario en esta variable
	//Es muy importante!.


  //formData.append('carpeta', carpeta); //Ejemplo para enviar más datos que no están incluidos en el formulario. si creamos nuevas variables aquí en el js, y queremos enviarlas también al php hay que
	//añadirlas al formulario, ya que necesitamos enviar todo empaquetado.
 /// formData.append('punto', num_punto); //(nombre de variable, y el valor de la varable).


	//Para enviar los datos del js se manda por ajax al PHP. HTML->JS->PHP
  $.ajax({
      url: "subir.php",
      data: formData, //Es nuestro formulario a enviar al php
      type: "post",
      contentType: false, //Cosillas por default
      processData: false,
      success: function(data){
        alert(data);
      }
    });

}
</script>
</body>
</html>