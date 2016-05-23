<?php
  

 
 if(!isset($_SESSION["id_usuario"])){
    $msn = base64_encode("Debe iniciar sesion primero!");
    $tipo_msn = base64_encode("advertencia");

    header("Location: index.php?m=".$msn."&tm=".$tipo_msn);
    
 }
  include_once("../model/empresa.class.php");
  
?>
      <form id="form" class="col s12 " action="../controller/usuarios.controller.php" method="POST">
        <h2 class="center">Nuevo Usuario</h2>

        <div class="row" >
          <div class="col s12">
                <div class="input-field col s12 m6">
                  <select>
                    <option value="" disabled selected>Seleccione Tipo de Documento</option>
                    <option value="CC">Cedula de Ciudadanía</option>
                    <option value="TI">Tarjeta de Identidad</option>
                    <option value="RC">Registro Civil</option>
                    <option value="Pasaporte">Pasaporte</option>
                  </select>
                  
                </div>
                <div class="input-field col s12 m6 black-text ">
                  <label class="black-text">Número de documento</label>
                  <br>
                  <input type="number" name="numero_documento" class="validate" required  />
              </div>
        </div> 
        </div>
          <div class="row" >
          <div class="col s12">
              <div class="input-field col s12 m6 black-text" >
                <label class="black-text">Nombres</label>
                <br>
                <input type="text" name="nombre" class="validate" required onkeypress="return validar(event)"/>
              </div>
              <div class="input-field col s12 m6 black-text">
                <label class="black-text">Apellidos</label>
                <br>
                <input type="text" name="apellido" class="validate" required onkeypress="return validar(event)"/>
              </div>
            </div>
          </div>
      <div class="row" >
          <div class="input-field col s12 m6 black-text" >
            <label class="black-text">Número celular</label>
            <br>
            <input type="number" name="celular" class="validate" required size="11" />
          </div> 

          <div class="input-field col s12 m6 black-text">
            <label class="black-text">Número de telefono</label>
            <br>
            <input type="number" name="telefono" class="validate" required size="10" />
          </div>
      </div>
      <div class="row" >
          <div class="input-field col s12 m6 black-text">
            <label class="black-text">Dirección</label>
            <br>
            <input type="text" name="direccion" class="validate" required/ >
          </div>

          <div class="input-field col s12 m6 black-text">
            <label class="black-text">Ciudad</label>
            <br>
            <input type="text" name="ciudad" class="validate" required onkeypress="return validar(event)"/ >
          </div>
      </div>
      <div class="row" >
          <div class="input-field col s12 m6 black-text">
            <label class="black-text">Correo Electrónico</label>
            <br>
            <input type="email" name="correo" class="validate" required/ >
          </div>
          <div class="input-field col s12 m6 black-text">
            <label class="black-text">Ingrese una Contraseña</label>
            <br>
            <input type="password" name="clave" class="validate" required/>
          </div>
      </div>

      <div class="row" >
          <div class="input-field col s12 m6 black-text">
            <label class="black-text">Fecha de Nacimiento </label>
            <br>
            <input type="date" name="fecha_nacimiento" min="1900-01-01" class="validate" required/ >
          </div>

          <div class="col s12 m6 black-text ">
            <label class="black-text center" >Seleccione Género</label>
            <br>
            <div class="class col s6">
                <input name="sexo"  value="mujer"type="radio" id="sex1" required/ />
                <label for="sex1" class="black-text">Femenino</label>
            </div>
            <div class="class col s6">
                <input name="sexo"  value="Hombre" type="radio" id="sex2" />
                <label for="sex2" class="black-text">Masculino</label>
            </div> 
      </div>
      <div class="row" >
      <?php 
       if($_SESSION["id_rol"]==4){
       ?>
      <div class="input-field col s12 m6" name>
                  <select name="id_rol" required>
                    <option value="" disabled selected>Seleccione el Rol</option>
                    <option value="1">Usuario Publico</option>
                    <option value="2">Empleado</option>
                    <option id="Clie" value="3">Cliente Administrador</option>
                    <option value="4">Administrador</option>
                  </select>
      </div>
      <?php
      }elseif ($_SESSION["id_rol"]==3) {              
      ?>
      <div class="input-field col s12 m6" name>
                  <select name="id_rol" required>
                    <option value="" disabled selected>Seleccione el Rol</option>
                    <option value="1">Usuario Publico</option>
                    <option value="2">Empleado</option>                    
                  </select>
      </div>
      <?php 
       }
      ?>
      </div>


      <input type="hidden" name="estado" value="1">           
      <input type="hidden" name="autor" value="<?php echo ($_SESSION["nombre"])." ".($_SESSION["apellido"]); ?>">
      <div id="complemento">

        
      </div> 
          <div class="col s12 center">
            <button  name="acc" value="c" class="waves-effect black btn">Enviar</button>
            <button class="waves-effect black btn"><a href="dashboard.php>">Cancelar</a></button>

          </div>
  </form> 
  </div>
      <script>
    $(document).ready(function(){
        $("#clie").click(function(){
            $("#complemento").html("
              <div class="row" ><div class="input-field col s12 m6 black-text">
              <?php
              $empresa= Gestion_empresa::ReadAll(); ?>
              <label class="white-text" >Seleccione una empresa</label>
              <select name="id_empresa">
              <?php
              foreach ($empresa  as $emp) {
                echo "
                <option value='$emp[0]'>$emp[1]</option>
               ";} ?>
                <label class="black-text">Correo Electrónico</label>
                <br>
                <input type="email" name="correo" class="validate" required/ >
              </div>
              <div class="input-field col s12 m6 black-text">
                <label class="black-text">Ingrese una Contraseña</label>
                <br>
                <input type="password" name="clave" class="validate" required/>
              </div>
          </div>");
        });
    });
    </script>
</body>

 
