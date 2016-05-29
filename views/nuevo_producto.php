 <?php 
 // David por favor cuando   arregles el Diseño,para q lo traiga la dasboard por favor descomenta la linea  de autor para q funcione 
   require_once("../model/db_conn.php");
  require_once("../model/proveedores.class.php");
  /*

  if(!isset($_SESSION["id_usuario"])){
    $msn = base64_encode("Debe iniciar sesion primero!");
    $tipo_msn = base64_encode("advertencia");

    header("Location: index.php?m=".$msn."&tm=".$tipo_msn);
  }*/
  $proveedor= Gestion_proveedores::ReadAll();

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
      
      
<body>
 <div class="container s12 m10 l9>

      <form id="registrate" class="col s12 " action="../controller/productos.controller.php" method="POST">
        <h2 class="center">Nuevo Producto</h2>

        <div class="row" >
          <div class="col s12">
                <div class="input-field col s12 m6 black-text" >
                <label class="black-text">Referencia</label>
                <br>
                <input type="text" name="referencia" class="validate" required />
              </div>
                <div class="input-field col s12 m6 black-text ">
                  <label class="black-text">Nombre Producto o Servicio</label>
                  <br>
                  <input type="text" name="nombre" class="validate" required onkeypress="return validar(event)"  />
              </div>
        </div> 
        </div>
          <div class="row" >
          <div class="col s12">
              <div class="input-field col s12 m6 black-text" >
                <label class="black-text">Valor Compra</label>
                <br>
                <input type="number" name="valor_compra" class="validate" required />
              </div>
              <div class="input-field col s12 m6 black-text">
                <label class="black-text">Valor Venta</label>
                <br>
                <input type="number" name="Valor Venta" class="validate" required />
              </div>
            </div>
          </div>
      <div class="row" >
          <div class="input-field col s12 m6 black-text" >
            <label class="black-text">Valor Iva</label>
            <br>
            <input type="number" name="iva" class="validate" required size="11" />
          </div> 

          <div class="input-field col s12 m6 black-text">
            <label class="black-text">Porcentaje Descuento</label>
            <br>
            <input type="number" name="descuento" class="validate"  size="10" />
          </div>
      </div>
      <div class="row" >
          <div class="input-field col s12 m6 black-text">
            <label class="black-text">Cantidad Existencias</label>
            <br>
            <input type="number" name="cant_existente" class="validate" required/ >
          </div>

          <div class="input-field col s12 m6 black-text">
            <label class="black-text">Tipo de Empresa</label>
              <br>
              <select name="id_tipoproducto" required >
                <option value="" disabled selected>Seleccione</option>
                <option value="1">Servicios</option>
                <option value="2">Insumos</option>
                <option value="3">Cosmeticos</option>
                <option value="4">Quimicos</option>
              </select>          
          </div>
      </div>
      <div class="row" >
          <div class="input-field col s12 m6 black-text">
            <label class="black-text">Seleccione Proveedor</label>
              <br>
              <select name="id_proveedor" required >
                <option value="" disabled selected>Seleccione</option>
                <?php  
                foreach ($proveedor as $row) {
        echo '<option value="'.$row["id_proveedor"].'">'.$row["razon_social"].'</option>';} ?>          
               </select> 
          </div>
        </div>
        <input type="hidden" name="estado" value="1">
        <input type="hidden" name="id_empresa" value="<?php echo"1"//echo ($_SESSION["id_empresa"])?>">
        <input type="hidden" name="autor" value="<?php echo"admin" // echo ($_SESSION["nombre"])." ".($_SESSION["apellido"]); ?>">
          <div class="col s12 center">
            <button  name="acc" value="c" class="waves-effect black btn">Enviar</button>
            <button class="waves-effect black btn"><a href="index.php">Cancelar</a></button>
          </div>

  </form> 
  </div>
	
</body>
</html>