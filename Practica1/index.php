<!DOCTYPE html>
<head>
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/subir.js"></script>
<style>
body {
  display: flex;
  min-height: 100vh;
  flex-direction: column;
}

main {
  flex: 1 0 auto;
}

body {
  background: #fff;
}

.input-field input[type=date]:focus + label,
.input-field input[type=text]:focus + label,
.input-field input[type=email]:focus + label,
.input-field input[type=password]:focus + label {
  color: #e91e63;
}

.input-field input[type=date]:focus,
.input-field input[type=text]:focus,
.input-field input[type=email]:focus,
.input-field input[type=password]:focus {
  border-bottom: 2px solid #e91e63;
  box-shadow: none;
}
</style>
</head>

<body>
  <div class="section"></div>
  <main>
    <center>
      <img class="responsive-img" style="width: 250px;" src="img/ax0NCsK.gif" />
      <div class="section"></div>

      <div class="container" id="login">
        <h5 class="indigo-text">Por favor, Inicia Sesion</h5>
        <div class="section"></div>

        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE; width: 500px;">
          <form class="col s12" action="login.php" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='email' name='Correo' id='email' />
                <label for='email'>Ingresa tu Correo</label>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='mot' id='password' />
                <label for='password'>Ingresa tu Contraseña</label>
              </div>
            </div>
            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
                </br></br></br>
                <a style="cursor: pointer;" onclick="showAddUser()">Registrar nuevo usuario</a>
              </div>
            </center>
          </form>
        </div>
      </div>
    </center>
    <div class="section"></div>
    <center>
    <div class="container" id="registro" style="display:none;">
      <h5 class="indigo-text">Registrar nuevo usuario</h5>
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE; width: 500px;">
          <form class="col s12" action="registrarUsuarios.php" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='newName'/>
                <label for='name'>Ingresa tu nombre</label>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='email' name='newEmail'/>
                <label for='email'>Ingresa tu Correo</label>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='newPass'/>
                <label for='password'>Ingresa tu Contraseña</label>
              </div>
            </div>
            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Registrar</button>
                </br></br>
              </div>
            </center>
          </form>
        </div>
     </div>
   </center>
  </main>
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>
