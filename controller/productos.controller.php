<?php

 require_once("../model/db_conn.php");
 require_once("../model/productos.class.php");

 $accion = $_REQUEST["acc"];
   switch ($accion) {
   case 'c':


        $referencia        = $_POST["referencia"]   
   	    $nombre            = $_POST["nombre"]
   	    $valor_compra      = $_POST["valor_compra"]
   	    $valor_venta       = $_POST["valor_venta"]
   	    $id_tipoproductos  = $_POST["id_tipoproductos"]
   	    $id_proveedor      = $_POST["id_proveedor"]
   	    
   	    try{
   	    	Gestion_productos:: create($referencia,$nombre,$valor_compra,$valor_venta,$id_tipoproductos,$id_proveedor,$autor);
   	    	$mensaje = "El producto se creo correctamente :D";
   	    }catch(Exception $e){
   	    	$mensaje = ":( Ha occurido un error, el errore fue:". $e->getMessage(). "en". $e->getFile() ."en la linea".
   	    		$e->getLine();

   	    }

   	    header("location: ../View/Gestion_productos.php?msn=".$mensaje);

   	    break;
   	
   	default:

   		break;


   		para  almacenar la tabla.
			$referencia     	=$_POST["referencia"];         
			$nombre      	    =$_POST["nombre"];
			$valor_compra    	=$_POST["valor_compra"];
			$valor_venta   	    =$_POST["valor_venta"];
			$id_tipoproductos   =$_POST["id_tipoproductos"];
			$id_proveedor		=$_POST["id_proveedor"];

			try {
				Gestion_productos::update($referencia,$nombre,$valor_compra,$valor_venta,$id_tipoproductos,$id_proveedor,$autor);
				$mensaje= "se ha  actualizado correctamente :D";
				
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
			header("location: ../Gestion_productos.php?msn=".$mensaje);


				break;
			case 'd':
			
			try {
				Gestion_usuarios::update($referencia,$nombre,$valor_compra,$valor_venta,$id_tipoproductos,$id_proveedor,$autor);
				$mensaje= "se elimino correctamente :D";
				
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
			header("location: ../Gestion_productos.php?msn=".$mensaje);


				break;
			
			
			
			
		}
?>

   	}
