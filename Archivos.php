
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
  <link rel="stylesheet" href="css/materialize.min.css">
  <title></title>
</head>
<body>

 <div class="container">
   <div class="row">
    <h1>Pagina para subir archivos</h1>
    <div class="grid-example col s12 ">


      <form method="post" id="frm_addfile" enctype="multipart/form-data" >
    <div class="file-field input-field">
      <div class="btn">
        <span>Archivo</span>
       <input type="file" class="file" id="file_archivo" name="file_archivo[]" multiple="true" style="width: 400px;">
      </div>
      <div class="file-path-wrapper">
           <input class="file-path validate" type="text">
     
      </div>
      <a class="waves-effect waves-light btn" onclick="registrar_archivo()">Subir</a>
    </div>
  </form>

       
      </form>

    </div>

    <div class="divider"></div>
    <div class="grid-example col s12 ">

      <?php
      include "conexion.php";

      $sql = " select u.Nombre as Nombre ,a.Nombre as Archivo,a.Ubicacion as URL,a.Conteo as Conteo, a.ArchID as ID from  usuarios as u inner join archivos as a on u.PersID=a.PerID;";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        echo " <table>
        <thead>
        <tr>
        <th>Nombre Usuario</th>
        <th>Archivo</th>
        <th>Direccion</th>
        <th>Numero de Descargas</th>
        </tr>
        </thead>

        <tbody>";
    // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "  
          <tr>
          <td>".$row["Nombre"]."</td>
          <td>".$row["Archivo"]."</td>
          <td>
          <form action='Descarga.php' method='get'>
          <input style='display: none' name='id' value='".$row["ID"]."'></input>
          <button type='submit' class='waves-effect waves-light btn' onclick='aumentarCont(".$row["ID"].")'>Descargar</button>
          </form>
          </td>
          <td>" . $row["Conteo"]. "</td>
          </tr>
          ";
        }
        echo "  </tbody>
        </table>";
      } else {
        echo "<h2>No hay Archivos</h2>";
      }
      $conn->close();
      ?>

    </div>
  </div>
  <div class="logout" style="margin-top: 30px; marging-bottom: 20px;">
  <center><a href="logout.php">Cerrar sesión</a></center>
  </div>

</div>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/subir.js"></script>
</body>
</html>