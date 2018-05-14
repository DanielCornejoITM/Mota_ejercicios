
	function registrar_archivo(){
  //Envía el tipo de funcion a través de un input, y se manda mediante todo el paquete del formulario ;)
  var formData = new FormData(document.getElementById("frm_addfile")); //Guardamos todo el contenido del formulario en esta variable
	//Para enviar los datos del js se manda por ajax al PHP. HTML->JS->PHP
  $.ajax({
      url: "subir.php",
      data: formData, //Es nuestro formulario a enviar al php
      type: "post",
      contentType: false, //Cosillas por default
      processData: false,
      success: function(data){
 
        location.reload(true);
      }

    });
 

}

function aumentarCont(id_archivo){
  var id = parseInt(id_archivo); 

   $.ajax({
      url: "contador.php",
      data: {"id": id}, //Es nuestro formulario a enviar al php
      type: "get",
      success: function(data){
        location.reload(true);

      }

    });

}

function showAddUser(){
 document.getElementById("registro").style.display="block";
 document.getElementById("login").style.display="none";
}