<?php
  
  session_start();
  require_once("../model/db_conn.php");
  require_once("../model/usuarios.class.php");

  if(!isset($_SESSION["id_usuario"])){
    $msn = base64_encode("Debe iniciar sesion primero!");
    $tipo_msn = base64_encode("advertencia");


    header("Location: index.php?m=".$msn."&tm=".$tipo_msn);
  }
  
?>


<head>
	<title>Gestion Proveedores</title>
      <meta charset="utf-8">      
      <link type="text/css" rel="stylesheet" href="recursos\plugins\materialize\css\materialize.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" type="text/css" href="recursos\css\estilos_iniciosesion.css">
      <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
    <link rel="stylesheet" href="recursos/plugins/font-awesome/css/font-awesome.min.css">
    
     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>

     <script>
    $(document).ready( function () {
      $('#datatable').DataTable();
    });
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
		      $proveedores= Gestion_Proveedores::ReadAll();

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
		                  <a href='../controller/usuarios.controller.php?ui=".base64_encode($row["id_proveedor"])."&acc=d'><i class='fa fa-user-times' aria-hidden='true'></i></a>


		                </td>
		              </tr>";
		      }

		      ?>
		      </tbody>
		
		    </table>
	</div>
	<?php
                  if( base64_decode(@$_GET["tm"]) == "advertencia"){
                    $estilos = "orange";
                  }else{
                    $estilos = "red";
                  }

                  echo "<div style='background-color:".$estilos."'>".base64_decode(@$_GET["m"])."</div>";?>
 </body>


	
</html>

