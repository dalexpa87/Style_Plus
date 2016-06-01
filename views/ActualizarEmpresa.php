<?php
  
 // David por favor cuando   arregles el Diseño,para q lo traiga la dasboard por favor descomenta la linea  de autor para q funcione 
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
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link rel="stylesheet" href="recursos/plugins/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="recursos/css/estilos.css">
  <link rel="stylesheet" type="text/css" href="recursos/css/jquery.dataTables.css">
    <link rel="stylesheet" href="recursos/plugins/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="recursos/plugins/materialize/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="recursos/plugins/sweetalert/dist/sweetalert.css">
  <title>Style+</title>
  
    
    
    <script type="text/javascript" src="recursos/plugins/jquery/jquery-1.12.1.min.js"></script>
    <script type="text/javascript" charset="utf8" src="recursos/plugins/datatable/jquery.dataTables.min.js"></script>

   

    <script type="text/javascript" src="recursos/plugins/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="recursos/plugins/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="grey lighten-1">      
  <div class="container col s12 l7 m9">

  <form class="col s12 center" action="../controller/empresa.controller.php" method="POST">
        <h1 class="center">Actualizar Empresa</h1>

        
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
         <button  type="botton" name="acc" value="u" class="waves-effect black btn"> Guardar</button>
         <button type="button" class="waves-effect black btn"><a href="Gestion_proveedores.php">cancelar</a></button>
         

    
      </form>
      </div>
  
        
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
