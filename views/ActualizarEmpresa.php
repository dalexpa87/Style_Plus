<?php
  
  require_once("../model/db_conn.php");
  require_once("../model/empresa.class.php");
  /*

  if(!isset($_SESSION["id_usuario"])){
    $msn = base64_encode("Debe iniciar sesion primero!");
    $tipo_msn = base64_encode("advertencia");

    header("Location: index.php?m=".$msn."&tm=".$tipo_msn);
  }*/
  $empresa = Gestion_empresa::ReadbyId(base64_decode($_REQUEST["ui"]));

?>     
  <div class="container col s12 l7 m9" id="form">

  <form class="col s12 center" action="../controller/empresa.controller.php" method="POST">
        <h3 class="center">Actualizar Empresa</h3>

        
      <div class="row" >
          <div class="input-field col s10 l5 m5 black-text">
            <label>Razon Social</label>
            <br>
            <input type="text" value="<?php echo $empresa[1] ?>" name="razon_social" class="validate" required onkeypress="return validar(event)"/>
          </div>

          <div class="input-field col s10 l5 m5 black-text">
            <label>Nit o Rut</label>
            <br>
            <input type="number"  value="<?php echo $empresa[2] ?>" name="nit" class="validate" required/ >
          </div>
      </div>
      <div class="row" >
          <div class="input-field col s10 l5 m5 black-text">
            <label>Teléfono Empresa</label>
            <br>
            <input type="tel" value="<?php echo $empresa[3] ?>" name="telefono" class="validate" required/ >
          </div>
          <div class="input-field col s10 l5 m5 black-text">
            <label>Dirección</label>
            <br>
            <input type="text"  value="<?php echo $empresa[4] ?>" name="direccion" class="validate"required/  >
          </div>          
      </div>
      <div class="row" >       

          <div class="input-field col s10 l5 m5 black-text" required/>
            <label>Correo</label>
            <br>
            <input type="email" value="<?php echo $empresa[5] ?>" name="correo" class="validate" required / >
          </div>
          <div class="input-field col s10 l5 m5 black-text">
            <label class="black-text">Tipo de Empresa</label>
                  <br>
                  <select name="descripcion" required >
                    <option value="" disabled selected>Seleccione</option>
                    <option value="Barberia" <?php if($empresa[6] == "BARBERIA"){ echo "selected"; } ?>>Barbería</option>
                    <option value="Peluqueria" <?php if($empresa[6] == "PELUQUERIA"){ echo "selected"; } ?>>Peluquería</option>
                    <option value="Spa de uñas" <?php if($empresa[6] == "SPA DE UÑAS"){ echo "selected"; } ?>>Spa de uñas</option>
                    <option value="Spa de Relajacion" <?php if($empresa[6] == "SPA DE RELAJACION"){ echo "selected"; } ?>>Spa de relajación</option>
                    <option value="Centro Estetico"  <?php if($empresa[6] == "CENTRO ESTETICO"){ echo "selected"; } ?>>Centro Estético</option>
                    <option value="Tienda de Belleza" <?php if($empresa[6] == "TIENDA DE BELLEZA"){ echo "selected"; } ?>>Tienda de Belleza</option>
                  </select>
          </div> 
      </div>
      <div class="row" >
                  
          
      
          <input type="hidden" name="autor" value="<?php //echo ($_SESSION["nombre"])." ".($_SESSION["apellido"]); ?>"> 
           <input type="hidden" name="estado" value="1"> 
           <input type="hidden" name="id_empresa" value="<?php echo $empresa[0] ?>">                
         <button  name="acc" value="u" class="waves-effect black btn"> Actualizar</button>
         <a class="waves-effect black btn" href="dashboard.php?p=<?php echo base64_encode("gestion_empresa"); ?>">Cancelar</a>
         

    
      </form>
      </div>
  
        
  