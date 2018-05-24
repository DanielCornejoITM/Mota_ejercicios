<?php
$Palabra= $_GET["Buscar"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Buscador Pirata</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>
  <div class="container">

    <div class="row">

      <div class="six offset-by-three columns">
        <a href="index.php"><h1>Nuestro Buscador</h1></a>
      </div>
    </div>
    <form action="Resultados.php" method="get">
      <input value=<?php  echo "'".$Palabra."'"; ?> type="text" class=" u-full-width" name="Buscar"></input>
      <div class=" offset-by-ten column">
        <input class="button-primary" value="Buscar"  type="submit"></input>
      </div>
    </form>
    <br>
  </div>
  <div class="container">

    <?php
    include("Buscador/conexion.php");
  $sql = "select Titulo, URL from Pages inner join Conexion on Pages.idP=Conexion.idP inner join Word on Conexion.idW=Word.idW where Word.Palabra like'". $Palabra."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "

          <div class='row'>
            <div class='ten columns'>
              <h2> ".$row["Titulo"]."</h2>
            </div>
            <div class='two columns'>
              <a class='button' href='".$row["URL"]."'>Ir</a>
            </div>
          </div>

          ";
        }
    } else {
        echo "No Tenemos Paginas";
    }
    $conn->close();


    ?>


  </div>


  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
