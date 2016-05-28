<?php /*
  
  session_start();
  require_once("../model/db_conn.php");*/
  require_once("../model/proveedores.class.php");
  require_once("../model/db_conn.php");
/*
  if(!isset($_SESSION["id_usuario"])){
    $m= base64_encode("Debe iniciar sesion primero!");
    $tm = base64_encode("error");


    header("Location: index.php?m=".$m."&tm=".$tm);
  }
  */
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
      </script>
     
</head>
  <body>
    <div class="container l5 m10 s12 ">
		    <h1>GESTIONAR PROVEEDORES</h1>

		    <a href="nuevoproveedor.php" class="white"><h4><i class="fa fa-building-o" aria-hidden="true"> Nuevo Proveedor</i></h4></a>
		


		    <table id="datatable" class="display">
		      <thead>
		        <tr>
		          <th>id</th>
		          <th>Razon Social</th>
		          <th>Nit</th>
		          <th>Telefono</th>
		          <th>Direccion</th>
		          <th>Ciudad</th>
		          <th>Peersona de Contacto</th>
		          <th>Correo</th>
		          <th>Acciones</th>		          
		        </tr>
		      </thead>
		      <tbody>

		      <?php
		      $proveedores=Gestion_Proveedores::ReadAll();

		      foreach ($proveedores as $row) {

		        
		        echo "<tr>
		                <td>".$row["id_proveedor"]."</td>
		                <td>".$row["razon_social"]."</td>
		                <td>".$row["nit"]."</td>
		                <td>".$row["telefono"]."</td>
		                <td>".$row["direccion"]."</td>
		                <td>".$row["ciudad"]."</td>
		                <td>".$row["nombre_contacto"]."</td>
		                <td>".$row["correo"]."</td>
		                <td>

		                  <a href='ActualizarProveedor.php?ui=".base64_encode($row["id_proveedor"])."'><i class='fa fa-pencil'></i></a>
		                  


		                </td>
		              </tr>";
		      }

		      ?>
		      </tbody>
		
		    </table>
	</div>
	
 </body>


	
</html>

