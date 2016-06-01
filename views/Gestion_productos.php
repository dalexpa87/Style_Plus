<?php /*
  
  session_start();
  require_once("../model/db_conn.php");*/
  require_once("../model/db_conn.php");
  require_once("../model/productos.class.php");
  
  require_once("../model/proveedores.class.php");

/*
  if(!isset($_SESSION["id_usuario"])){
    $m= base64_encode("Debe iniciar sesion primero!");
    $tm = base64_encode("error");


    header("Location: index.php?m=".$m."&tm=".$tm);
  }
  */
?>


    <div class="container l5 m10 s12 ">
		    <h1>GESTIONAR PRODUCTOS</h1>

		    <a href="nuevo_producto.php" class="white"><h4><i class="fa fa-building-o" aria-hidden="true"> Nuevo Producto</i></h4></a>
		


		    <table id="datatable" class="display">
		      <thead>
		        <tr>
		          <th>id</th>
		          <th>Referencia</th>
		          <th>Nombre</th>
		          <th>Valor Compra</th>
		          <th>Valor Venta</th>
		          <th>iva</th>
		          <th>Descuento</th>
		          <th>Cantidad Existente</th>
		          <th>Tipo Producto</th>
		          <th>Proveedor</th>
		          <th>Acciones </th>		          
		        </tr>
		      </thead>
		      <tbody>

		      <?php
		      $id_empresa= $_SESSION["id_empresa"];
		      $producto=Gestion_Productos::Readbyempresa($id_empresa);
		      

		      foreach ($producto as $row) {

		      	if($row["id_tipoproducto"]==1){
		          $tipopro = "Servicios";		          
		        }elseif($row["id_tipoproducto"]==2){
		        	$tipopro="Insumos";
		        }elseif($row["id_tipoproducto"]==3){
		            $tipopro="Cosmeticos";
		        }elseif($row["id_tipoproducto"]==4){
		            $tipopro="Quimicos";
		        }
		        if($row["id_proveedor"]== 0 or $row["id_proveedor"]==" " ){ 
		        $proveedor="No Aplica";
		        }elseif($row["id_proveedor"] != 0 or $row["id_proveedor"]!=" " ){
		        	$id_proveedor=$row['id_proveedor'];
		        	$consu=Gestion_Proveedores::ReadbyId($id_proveedor);
		        	$proveedor=$consu['razon_social'];}


		        
		        echo "<tr>
		                <td>".$row["id_producto"]."</td>
		                <td>".$row["referencia"]."</td>
		                <td>".$row["nombre"]."</td>
		                <td>".$row["valor_compra"]."</td>
		                <td>".$row["valor_venta"]."</td>
		                <td>".$row["iva"]."</td>
		                <td>".$row["cant_existente"]."</td>
		                <td>".$tipopro."</td>
		                <td>".$proveedor."</td>
		                <td>

		                  <a href='ActualizarProducto.php?ui=".base64_encode($row["id_producto"])."'><i class='fa fa-pencil'></i></a>
		                  


		                </td>
		              </tr>";
		      }

		      ?>
		      </tbody>
		
		    </table>
	</div>
	
 </body>


	
</html>

