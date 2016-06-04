 <?php 
  
  require_once("../model/db_conn.php");

  require_once("../model/proveedores.class.php");
  require_once("../model/productos.class.php");

 
  $proveedor=Gestion_proveedores::ReadAll();
  $producto = Gestion_productos::ReadbyId(base64_decode($_REQUEST["ui"]));
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

     <script>
    $(document).ready( function () {
          $('#datatable').DataTable({    
               "language": {               
               "url": "https://cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"       
                }   
    })
          $('.modal-trigger').leanModal();
      $('select').material_select();

      <?php

      if(isset($_GET["m"],$_GET["tm"])){
        echo "swal({ title: 'STYLE +',   text: '".$_GET["m"]."',   type: '".$_GET["tm"]."'})";//Sweet Alert, falta cuadrar
      } 
      ?>

  
      //$("#mySelect").change(function(){
         //if($("#mySelect").val() == "3"){
            //$("#complemento").html("<div class='row'><div class='input-field col s12 m6 black-text'><?php $empresa//=Gestion_empresa::ReadAll(); ?><label class='white-text' >Seleccione una empresa</label><select name='id_empresa'><?php
                //foreach ($empresa as $emp){
                             // echo '
                             // <option value="'.$emp[0].'"><'.$emp[1].' </option> ';} ?>")};
                    //});
               
                  });
    </script>
    
</head> 
<body>

 <div class="container s12 m10 l9" id="form">

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
                <input type="number" name="valor_venta" class="validate" required />
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
        <div class="col s12">
          <div class="input-field col s12 m6 black-text">
            <label class="black-text">Cantidad Existencias</label>
            <br>
            <input type="number" name="cant_existente" class="validate" required/ >
          </div>

          <div class="input-field col s12 m6 black-text">
            <label class="black-text">Tipo de Productos</label>
              <br>
              <select name="id_tipoproducto" required >
                <option value="" disabled selected>Seleccione</option>
                <option value="1" >Insumos</option>
                <option value="2" >Cosmeticos</option>
                <option value="3" >Quimicos</option>
              </select>          
          </div>
        </div>
      </div>
      <div class="row" >
        <div class="col s12">
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
        <input type="hidden" name="id_empresa" value="<?php echo $_SESSION["id_empresa"]?>">
        <input type="hidden" name="autor" value="<?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"]; ?>">
          <div class="col s12 center">
            <button  name="acc" value="c" class="waves-effect black btn">Enviar</button>
            <button class="waves-effect black btn"><a href="index.php">Cancelar</a></button>
          </div>
      </div>

  </form> 
  </div>
  </body>
  </html>
  