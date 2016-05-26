

      <div class=" col s12">

      <form id="registrate" class="col s12 " action="../controller/usuarios.controller.php" method="POST">
        <h2 class="center">Regístrate</h2>

        <div class="row" >
          <div class="col s12">
                <div class="input-field col s12 m6">
                <label class="black-text">Tipo de Documento</label>
                  <br>
                  <select name="tipo_documento" required >
                    <option value="" disabled selected>Seleccione</option>
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
      <input type="hidden" name="estado" value="1">
      <input type="hidden" name="id_rol" value="1">      
      <input type="hidden" name="autor" value="Autoregistrado">
          <div class="col s12 center">
            <button  name="acc" value="c" class="waves-effect black btn">Enviar</button>
            <button class="waves-effect black btn"><a href="index.php">Cancelar</a></button>
          </div>
  </form> 
  </div>
    <?php
              //if( base64_decode(@$_GET["tm"]) == "advertencia"){
               // $estilos = "orange";
              //}else{
                //$estilos = "red";
              //}

              //echo "<div style='background-color:".$estilos."'>".base64_decode(@$_GET["m"])."</div>";?>
