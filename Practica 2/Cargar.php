<?php
include("Buscador/Cadenero.php");
$Pagina1 =  file_get_contents("Paginas/Pagina1.html");
$Pagina2 =  file_get_contents("Paginas/Pagina2.html");
$Pagina3 =  file_get_contents("Paginas/Pagina3.html");
$Pagina4 =  file_get_contents("Paginas/Pagina4.html");
$Pagina5 =  file_get_contents("Paginas/Pagina5.html");
limpiarCadena($Pagina1,"Paginas/Pagina1.html");
limpiarCadena($Pagina2,"Paginas/Pagina2.html");
limpiarCadena($Pagina3,"Paginas/Pagina3.html");
limpiarCadena($Pagina4,"Paginas/Pagina4.html");
limpiarCadena($Pagina5,"Paginas/Pagina5.html");

echo "<h1>Todas las Paginas han Sido Cargadas</h1>";

  ?>
