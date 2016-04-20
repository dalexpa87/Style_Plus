<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="recursos\plugins\materialize\css\materialize.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <link rel="stylesheet" type="text/css" href="recursos\css\estilos_iniciosesion.css">      

	<title>Registro</title>
</head>

      <div class="container col s12 l7 m9">

      <form class="col s12 center" action="../controller/usuarios.controller.php" method="POST">
        <h1 class="center">Regístrate</h1>

        <div class="row center" >
          <div class="col s12  l5 m5 black-text ">
            <label class="white-text" >Seleccione  tipo de documento </label>
            <br></br>
            <p>
                <input name="tipo_documento"  value="CC"type="radio" id="test1" required/ />
                <label for="test1" class="white-text">Cédula de ciudadania</label>
              </p>
              <p>
                <input name="tipo_documento"  value="TI" type="radio" id="test2" />
                <label for="test2" class="white-text">Tarjeta de Identidad</label>
              </p>
              <p>
                <input name="tipo_documento"  value="RC" type="radio" id="test3"  />
                <label for="test3" class="white-text">Registro Civil</label>
              </p>
                <p>
                  <input name="tipo_documento"  value="Pasaporte" type="radio" id="test4"  />
                  <label for="test4" class="white-text">Pasaporte</label>
              </p>

          </div> 

          <div class="input-field col s10 l5 m5 black-text ">
            <label>Número de documento</label>
            <br>
            <input type="text" name="numero_documento" class="validate" required/ >
          </div>
      </div>
      <div class="row" >
          <div class="input-field col s10 l5 m5 black-text">
            <label>Asigne Contraseña</label>
            <br>
            <input type="password" name="clave" class="validate" required/ >
          </div>

          <div class="input-field col s10 l5 m5 black-text" >
            <label>Nombres</label>
            <br>
            <input type="text" name="nombre" class="validate" required/ >
          </div>
      </div>
      <div class="row" >
          <div class="input-field col s10 l5 m5 black-text">
            <label>Apellidos</label>
            <br>
            <input type="text" name="apellido" class="validate"  >
          </div>

          <div class="input-field col s10 l5 m5 black-text">
            <label>Número de telefono</label>
            <br>
            <input type="text" name="telefono" class="validate" required/ >
          </div>
      </div>
      <div class="row" >
          <div class="input-field col s10 l5 m5 black-text">
            <label>Dirección</label>
            <br></br>
            <input type="text" name="direccion" class="validate" required/ >
          </div>

          <div class="input-field col s10 l5 m5 black-text">
            <label>Ciudad</label>
            <br>
            <input type="text" name="ciudad" class="validate" required/ >
          </div>
      </div>
      <div class="row" >
          <div class="input-field col s10 l5 m5 black-text">
            <label>Correo Electrónico</label>
            <br>
            <input type="email" name="correo" class="validate" required/ >
          </div>

          <div class="input-field col s10 l5 m5 black-text">
            <label>Número celular</label>
            <br>
            <input type="text" name="celular" class="validate" required/>
          </div>
      </div>
      <div class="row" >
          <div class="input-field col s10 l5 m5 black-text">
            <label>fecha de nacimiento </label>
            <br>
            <input type="date" name="fecha_nacimiento" min="1900-01-01" class="validate" required/ >
          </div>

          <div class="col s12  l5 m5 black-text ">
            <label class="white-text center" >Seleccione Género</label>
            <br>
            <p>
                <input name="sexo"  value="mujer"type="radio" id="sex1" required/ />
                <label for="sex1" class="white-text">Femenino</label>
              </p>
              <p>
                <input name="sexo"  value="Hombre" type="radio" id="sex2" />
                <label for="sex2" class="white-text">masculino</label>
              </p>
              

          </div> 
      </div> 
      <input type="hidden" name="estado" value="Activo">
      <div>
        <input type="hidden" name="id_rol">
        <label>rol</label>
      </div>
      <input type="hidden" name="autor" value="Autoregistrado">               
         <button  type="botton" name="acc" value="c" class="waves-effect black btn"> Enviar</button>
         <button type="button" class="waves-effect black btn"><a href="iniciosesion.php">cancelar</a></button>

    
      </form>
      </div>
    </div>
    
  </div>
<body class="grey lighten-1">      
  
  
        
   <script type="text/javascript" src="jquery-1.12.1.min.js"></script>
 	<script type="text/javascript" src="materialize\js\materialize.min.js"></script>
   <script type="text/javascript">
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
   </script>


  <script type="text/javascript">

  $(document).ready(function() {
    $('select').material_select();
  });
         
  </script>

</body>

</html>