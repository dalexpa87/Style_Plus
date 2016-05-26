
<?php

?>

<!DOCTYPE html>
<html>
<head>
      
      <meta charset="utf-8">      
      <link type="text/css" rel="stylesheet" href="recursos/plugins/materialize/css/materialize.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="recursos/plugins/sweetalert/dist/sweetalert.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" type="text/css" href="recursos/css/estilos_iniciosesion.css">
      <title>Login Usuarios</title>
</head>
  <body id="fondoinicio" class="img">
    <div class="container s12 m6">
      <form class="login" action="../controller/usuarios.controller.php" method="post" name="myform" novalidate>
                    <div class="row">

                    <h2 class="center">Bienvenido</h2>
                        <div class="input-field col s12 white-text">
                          <input id="email" type="email" class="validate" name="correo" required style="border-bottom: 1px solid #fff">
                          <label for="email">Correo</label>
                        </div>
                        <div class="input-field col s12 white-text ">
                          <input id="password" type="password" class="validate" required name="clave" style="border-bottom: 1px solid #fff">
                          <label for="password">Contraseña</label>
                        </div>
                    </div>
                    
                   <button class="btn s12 grey darken-4"  name="acc" value="l">Iniciar Sesión</button>
                
                   <a class="waves-effect grey darken-4 btn modal-trigger" href="#modal-registrate">Registrate</a>
                   
      </form>
                 

      
                     
          </div>
           <div id="modal-registrate" class="modal modal-fixed-footer">
            <div class="modal-content">
            <?php include("registrate.php"); ?>
            </div>

          </div>

          <script type="text/javascript" src="recursos/plugins/jquery/jquery-1.12.1.min.js"></script>
          <script type="text/javascript" src="recursos/plugins/materialize/js/materialize.min.js"></script>
          <script type="text/javascript" src="recursos/plugins/sweetalert/dist/sweetalert.min.js"></script>
          <script type="text/javascript">
              $(document).ready(function(){
              // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
              $('.modal-trigger').leanModal();
              $('select').material_select();
              
              });
          </script>
          <script type="text/javascript">//Validar tipos de datos
              function validar(e) { // 1
              tecla = (document.all) ? e.keyCode : e.which; // 2
              if (tecla==8) return true; // 3
              patron =/[A-Za-z\s]/; // 4
              te = String.fromCharCode(tecla); // 5
              return patron.test(te); // 6
              }
              </script>
              <script type="text/javascript">
              function numeros(nu) { // 1
              tecla = (document.all) ? e.keyCode : e.which; // 2
              if (tecla==8) return true; // 3
              ppatron = /\d/; // Solo acepta números// 4
              te = String.fromCharCode(tecla); // 5
              return patron.test(te); // 6
              }
              </script>
              <script type="text/javascript">
                  <?php

                    if(isset($_GET["m"],$_GET["tm"])){
                  echo "swal({ title: 'STYLE +',   text: '".base64_decode($_GET["m"])."',   type: '".base64_decode($_GET["tm"])."'})";

                  } 
                  ?>  
                  </script>
                  
     
      
</body>
</html>




