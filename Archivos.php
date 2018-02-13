
<?php

session_start();
if (!isset($_SESSION['ID'])) {
header("Location:index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<form method="post" id="frm_addfile" enctype="multipart/form-data" >
<input type="file" class="file" id="file_archivo" name="file_archivo[]" multiple="true" style="width: 400px;">
<input type="button" class="btn btn-info" value="Subir" onclick="registrar_archivo()"/>
</form>




<script type="text/javascript">
	

	function registrar_archivo(){
  //Envía el tipo de funcion a través de un input, y se manda mediante todo el paquete del formulario ;)
  var formData = new FormData(document.getElementById("frm_addfile")); //Guardamos todo el contenido del formulario en esta variable
	//Es muy importante!.

  var orden_dia = $("#index_orden").val(); //Los dejo como ejemplo para obtener valores de otro input por su id.
  var num_punto = $("#index_punto").val();


  formData.append('carpeta', carpeta); //Ejemplo para enviar más datos que no están incluidos en el formulario. si creamos nuevas variables aquí en el js, y queremos enviarlas también al php hay que
	//añadirlas al formulario, ya que necesitamos enviar todo empaquetado.
  formData.append('punto', num_punto); //(nombre de variable, y el valor de la varable).
  formData.append('orden_dia', orden_dia);

	//Para enviar los datos del js se manda por ajax al PHP. HTML->JS->PHP
  $.ajax({
      url: "subir.php",
      data: formData, //Es nuestro formulario a enviar al php
      type: "post",
      contentType: false, //Cosillas por default
      processData: false,
      success: function(data){
        showFilesViewer(); //ejemplo de algunas funciones a ejecutar una vez que se realiza con exito lo del php
        hideAddFil();
      }
    });

}
</script>
</body>
</html>