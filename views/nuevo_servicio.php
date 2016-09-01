
 <div class="container s12 m10 l9" id="form">

    <form id="registrate" class="col s12 " action="../controller/servicios.controller.php" method="POST">
        <h4 class="center">Nuevo Servicio</h4>

        <div class="row" >
          <div class="col s12">
                <div class="input-field col s4 m4 black-text" >
                <label class="black-text">Codigo Servicio</label>
                <br>
                <input type="text" name="codigo" class="validate" required/>
              </div>
                <div class="input-field col s4 m4 black-text ">
                  <label class="black-text">Nombre Servicio</label>
                  <br>
                  <input type="text" name="nombre" class="validate" required onkeypress="return validar(event)"  />
              </div>
              <div class="input-field col s4 m4 black-text" >
                <label class="black-text">Descripción</label>
                <br>
                <input type="text" name="descripcion" class="validate" required />
              </div>
        </div>
        </div>
          <div class="row" >
          <div class="col s12">

              <div class="input-field col s3 m4 black-text">
                <label class="black-text">Valor Venta</label>
                <br>
                <input type="number" name="valor_venta" class="validate" required />
              </div>

              <div class="input-field col s3 m4 black-text" >
                <label class="black-text">Valor Iva</label>
                <br>
                <input type="number" name="iva" class="validate" required size="11" />
              </div>

              <div class="input-field col s3 m4 black-text">
                <label class="black-text">Porcentaje Descuento</label>
                <br>
                <input type="number" name="descuento" class="validate"  size="10" />
              </div>
              <div class="input-field col s3 m4  black-text">

                <input type="number" name="duracion" class="validate" value="3000" required hidden/ >
              </div>
            </div>
          </div>

          <div class="row" >
            <div class="col s12">
              <input type="hidden" name="id_empresa" value="<?php echo 1//$_SESSION["id_empresa"]?>">
              <input type="hidden" name="autor" value="<?php $_SESSION["nombre"]." ".$_SESSION["apellido"]; ?>">
              <div class="col s12 center">
                  <button  name="acc" value="c" class="waves-effect black btn">Enviar</button>
                  <button class="waves-effect black btn"><a href="dashboard.php?p= <?php echo base64_encode('gestion_servicios')?>">Cancelar</a></button>
              </div>
          </div>
          </form>
        </div>
