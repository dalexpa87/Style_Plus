<!DOCTYPE html>
<html>
<head>
      <head>
      <meta charset="utf-8">      
      <link type="text/css" rel="stylesheet" href="recursos\plugins\materialize\css\materialize.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" type="text/css" href="recursos\css\estilos_iniciosesion.css">
      <title>Login Usuarios</title>
      </head>
</head>
  <body id="fondoinicio" class="img">
    <div    class="container loguin m10  l12 s10">
      <form  class="login" action="../controller/usuarios.controller.php" method="post" name="myform" novalidate>
                    <div class="row">
                        <div class="input-field col  white-text">
                          <input id="email" type="email" class="validate" name="correo" required>
                          <label for="email">Correo</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col ">
                          <input id="password" type="password" class="validate" required name="clave">
                          <label for="password">Contraseña</label>
                        </div>
                    </div>
                   <button class="btn s12 grey darken-4"  name="acc" value="l">Iniciar Sesión</button>
                   <a href="registrate.php" class="flow-text black-text ">Registrate</a>
                   
                </form>
                <?php
                  if(base64_decode(@$_GET["tm"]) == "advertencia"){
                    $estilos = "orange";
                  }else{
                    $estilos = "red";
                  }

                  echo "<div style='background-color:".$estilos."'>".base64_decode(@$_GET["m"])."</div>";?>    
      
                     
    </div>
     <script type="text/javascript" src="recursos/plugins/jquery/jquery-1.12.1.min.js"></script>
      <script type="text/javascript" src="recursos/plugins/materialize/js/materialize.min.js"></script>
</body>
</html>




