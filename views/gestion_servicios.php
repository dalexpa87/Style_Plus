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
<?php 
   require_once("../model/db_conn.php");
   require_once("../model/servicios.class.php"); 
?>


    <div class="container l5 m10 s12 " id="tabla">
        <h4>GESTIONAR SERVICIOS</h4>

        <a href="nuevo_servicio.php" class="white"><h4><i class="fa fa-shopping-basket" aria-hidden="true"> Nuevo Servicio</i></h4></a>
    


        <table id="datatable" class="display">
          <thead>
            <tr>
               <th>Codigo</th>
              <th>Nombre</th>
              <th>Descripcion</th>
              <th>Duracion</th>
              <th>Valor Servicio</th>
              <th>iva</th>
              <th>Descuento</th>              
              <th>Acciones </th>              
            </tr>
          </thead>
          <tbody>

          <?php
          $id_empresa=1;//$_SESSION["id_empresa"];
          $servicios=Gestion_Servicios::Readbyempresa($id_empresa);
         

          foreach ($servicios as $row) {            
           
            
           echo "<tr>
                    <td>".$row["codigo"]."</td>
                    <td>".$row["nombre"]."</td>
                    <td>".$row["descripcion"]."</td>
                    <td>".$row["duracion"]."</td>
                    <td>".$row["valor_venta"]."</td>
                    <td>".$row["iva"]."</td>
                    <td>".$row["descuento"]."</td>                    
                    <td>

                      <a href='ActualizarServicio.php?ui=".base64_encode($row["id_servicio"])."'><i class='fa fa-pencil'></i></a>
                      


                    </td>
                  </tr>";
          }

          ?>
          </tbody>
    
        </table>
  </div>

</body>
</html>