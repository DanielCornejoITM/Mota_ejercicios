<?php


function SacarIDPage($URL){
  include("conexion.php");
  $resultado = 0;
  $sql = "SELECT idP FROM Pages where URL='".$URL."'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          $resultado= $row["idP"];
      }
  }
$conn->close();
return $resultado;
}

function SacarIDWord($Palabra){
  include("conexion.php");
  $resultado=0;
  $sql = "SELECT idW FROM Word where Palabra='".$Palabra."'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          $resultado= $row["idW"];
      }
  }
$conn->close();
return $resultado;
}

function RegistrarPalabra($Palabra,$URL){
  include("conexion.php");
$sql1 = " INSERT INTO Word(Palabra,frecuencia) VALUES ('".$Palabra."',1);";

if (SacarIDPage($URL)==0) {
  RegistrarPagina($URL);
}
if (SacarIDWord($Palabra)==0) {
$conn->query($sql1);
}
else  AumentarPalabra(SacarIDWord($Palabra));

$IDP=SacarIDPage($URL);
$IDWord= SacarIDWord($Palabra);
$sql2= "INSERT INTO Conexion(idP,idW) VALUES (".$IDP.",".$IDWord.");";
$conn->query($sql2);
  $conn->close();
}

function RegistrarPagina($URL){
  include("conexion.php");
$Titulo=getTitle($URL);
$IDP=SacarIDPage($URL);
if($IDP == 0){
  $sql = " insert into Pages(URL,Titulo) Values('".$URL."','".$Titulo."')";
  $conn->query($sql);
}
$conn->close();

}

function AumentarPalabra($IDW){
  include("conexion.php");
$sql = "UPDATE Word  SET frecuencia= frecuencia +1 WHERE idW=".$IDW."";
  $conn->query($sql);
  $conn->close();
}

function getTitle($url) {
 $str = @file_get_contents($url);
 if ($str) {
   preg_match('/<title>([^<]+)</', $str, $title);
   return isset($title[1]) ? $title[1] : false;
 }
 return false;
}


 ?>
