<?php
  
  session_start();
  require_once("../model/db_conn.php");
  require_once("../model/usuarios.class.php");

  if(!isset($_SESSION["id_usuario"])){
    $msn = base64_encode("Debe iniciar sesion primero!");
    $tipo_msn = base64_encode("advertencia");

    header("Location: index.php?m=".$msn."&tm=".$tipo_msn);
  }
  $usuario = Gestion_Usuarios::ReadbyId(base64_decode($_REQUEST["ui"]));
?>
<html>
<head>
	<meta charset="utf-8">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="recursos\plugins\materialize\css\materialize.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <link rel="stylesheet" type="text/css" href="recursos\css\estilos_iniciosesion.css">      
     <title>Actualizar Usuario</title>
     

</head>
<body class="grey lighten-1">
  <div class="container col s12 l7 m9">
    <form class="col s12 center" action="../controller/usuarios.controller.php" method="POST">
      <h1 class="center">Actualizar Usuario</h1>
      <div class="row center">
        <div class="col s12  l5 m5 black-text ">
          <label class="white-text" >tipo de documento </label>
            <br>
            <select name="tipo_documento">
              <option value="CC" <?php if($usuario[1] == "CC"){ echo "selected"; } ?>>Cédula de ciudadania</option>
              <option value="TI" <?php if($usuario[1] =="TI"){ echo "selected"; } ?>>Tarjeta de Identidad</option>
              <option value="RC" <?php if($usuario[1] == "RC"){ echo "selected"; } ?>>Registro Civil</option>
              <option value="Pasaporte" <?php if($usuario[1] =="Pasaporte"){ echo "selected"; } ?>>Pasaporte</option>
            </select>
        </div>
        <div class="col s12  l5 m5 black-text ">
          <label>Número de documento</label>
            <br>
            <input type="text" value="<?php echo $usuario[2] ?>" name="numero_documento" class="validate" required/ > 
        </div>
      </div>
      <div class="row center">
        <div class="col s12  l5 m5 black-text ">
          <label>Contraseña</label>
          <br>
          <input type="password" value="<?php echo $usuario[3] ?>" name="clave" class="validate" required/ >
        </div>
        <div class="col s12  l5 m5 black-text ">
          <label>Nombres</label>
          <br>
          <input type="text" value="<?php echo $usuario[4] ?>"name="nombre" class="validate" required/ >
        </div>
      </div>
      <div class="row center">
        <div class="col s12  l5 m5 black-text ">
          <label>Apellidos</label>
          <br>
          <input type="text"value="<?php echo $usuario[5] ?>" name="apellido" class="validate" >
          </div>
        <div class="col s12  l5 m5 black-text ">
          <label>Número de telefono</label>
          <br>
          <input type="text" value="<?php echo $usuario[6] ?>"name="telefono" class="validate" required/ >          
        </div>
      </div>
      <div class="row center">
        <div class="col s12  l5 m5 black-text ">
          <label>Dirección</label>
          <br>
          <input type="text" value="<?php echo $usuario[7] ?>" name="direccion" class="validate" required/ >
        </div>
        <div class="col s12  l5 m5 black-text ">
          <label>Ciudad</label>
          <br>
          <input type="text" value="<?php echo $usuario[8] ?>" name="ciudad" class="validate" required/ >
        </div>
      </div>
      <div class="row center">
        <div class="col s12  l5 m5 black-text ">
          <label>Correo Electrónico</label>
          <br>
          <input type="email" value="<?php echo $usuario[9] ?>"name="correo" class="validate" required/ >
        </div>
        <div class="col s12  l5 m5 black-text ">
          <label>Número celular</label>
          <br>
          <input type="text" value="<?php echo $usuario[10] ?>"name="celular" class="validate" required/>
        </div>
      </div>
      <div class="row center">
        <div class="col s12  l5 m5 black-text ">
        <label>fecha de nacimiento </label>
        <br>            
        <input type="date"value="<?php echo $usuario[11] ?>" name="fecha_nacimiento" min="1900-01-01" class="validate" required/ >
        </div>
        <div class="col s12  l5 m5 black-text ">
          <label class="white-text center" >Género</label>
          <br>
          <select name="sexo">
            <option value="mujer" <?php if($usuario[12] == "mujer"){ echo "selected"; } ?>>Femenino</option>
            <option value="hombre" <?php if($usuario[12] =="hombre"){ echo "selected"; } ?>>Masculino</option>
          </select> 
        </div>
      </div>
      <div class="row center">
        <div class="col s12  l5 m5 black-text ">
          <label>Estado</label>
          <br>           
          <input type="text"value="<?php echo $usuario[13] ?>" name="estado"  class="validate" required/ >
        </div>
        <div class="col s12  l5 m5 black-text ">
          <label class="white-text center" >Rol</label>
          <br>
          <select name="id_rol">
            <option value="1" <?php if($usuario[14] == 1){ echo "selected"; } ?>>Usuario Publico</option>
            <option value="2" <?php if($usuario[14] ==2){ echo "selected"; } ?>>Empleado</option>
            <option value="5" <?php if($usuario[14] == 5){ echo "selected"; } ?>>Cliente Administrador</option>
            <option value="6" <?php if($usuario[14] ==6){ echo "selected"; } ?>>Administrador</option>
          </select>  
        </div>
      </div>
         <input type="hidden" name="id_usuario" value="<?php echo $usuario[0] ?>">  
         <input type="hidden" name="autor" value="Autoregistrado">               
         <button  type="botton" name="acc" value="u" class="waves-effect black btn"> Enviar</button>
         <button type="button" class="waves-effect black btn"><a href="Gestion_usuarios.php">Cancelar</a></button>
    </form>
  </div>
  <script type="text/javascript" src="recursos/plugins/jquery/jquery-1.12.1.min.js"></script>
     <script type="text/javascript" src="recursos/plugins/materialize/js/materialize.min.js"></script>
     <script>
         $(document).ready(function() {
         $('select').material_select();
         });
    </script>
 
  
  
</body>
</html>