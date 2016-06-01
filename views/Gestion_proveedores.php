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


    <div class="container l5 m10 s12 " id="tabla">
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
		          <th>Persona de Contacto</th>
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

