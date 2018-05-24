<?php

include("Consultas.php");
function limpiarCadena($cadena,$URL){
   $incompleto=false;
   //Se separa la cadena en palabras
   $palabras = preg_split("/[\s,]+/",$cadena);
   $resultado="";
   //En cada palabra checar si estan los etiquetas con '<' y '>'
   //Si tiene ambas eliminar dicho contenido
   $inc=true;
   foreach ($palabras as $palabra){
      //Se extrae la posicion de los marcadores
      //Regresa false si no los encuentra
      $posi = strpos(" ".$palabra, "<");
      $posf = strpos(" ".$palabra, ">");
      $dif=0;
      if(($posf==0 || $posi==0) && $incompleto==false ){ //Significa que no encontro fin del tag
         $incompleto=true;
      }
      //Si se encuentran ambos significa que es un falso positivo
      if ($posf==0 && $posi==0 && $incompleto&&$inc){
         $incompleto=false;
      }


      //Caso donde tag <> no contienen atributos
      if (($posf-$posi)>0 && $incompleto==false){
         $dif=($posf-$posi)+2;

      }
      //Caso donde la palabra tiene <
      else if ($posi>0 && $posf==0 &&  $incompleto==true){
         $dif=strlen($palabra)-$posi+1;
         $inc=false;
         //echo "i-";
      }
      //Caso donde la palabra tiene >
      else if ($posf>0 && $posi==0 &&  $incompleto==true){
         $dif=$posf;
         $posi=1;
         $incompleto=false;
         $inc=true;
         //echo "f-";
      }
      //Caso donde quita todo lo que haya entre <  > pero no aparece en la misma
      else if (($posf-$posi)==0 && $incompleto==true){
         $dif=strlen($palabra);
         $posi=1;
         //echo "c-";
      }

      $palabra=str_replace(substr($palabra, $posi-1, $dif),'', $palabra);
      if (preg_match("/[\s]*/",$palabra)== 1) {
    RegistrarPalabra($palabra, $URL);
    }

      $palabra=$palabra."&nbsp;";

      $resultado=$resultado.$palabra;
      //Se quita la palabra que termina con >

   }
 }







?>
