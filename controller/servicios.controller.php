<?php

 require_once("../model/db_conn.php");
 require_once("../model/servicios.class.php");

 $accion = $_REQUEST["acc"];
   switch ($accion) {
   case 'c':


        $codigo        = $_POST["codigo"];
        $codigo        =strtoupper($codigo);
   	    $nombre            = $_POST["nombre"];
   	    $nombre            =strtoupper($nombre);
   	    $descripcion      = $_POST["descripcion"];
   	    $descripcion   	  =strtoupper($descripcion);
   	    $duracion         =$_POST["duracion"];
   	    $valor_venta       = $_POST["valor_venta"];
   	    $iva               =$_POST["iva"];
   	    $descuento         =$_POST["descuento"];
   	    $id_empresa        =$_POST["id_empresa"];
   	    $autor             =$_POST["autor"];

				try {
				Gestion_Servicios::Create($codigo,$nombre,$descripcion,$duracion,$valor_venta,$iva,$descuento,$id_empresa,$autor);
				$tm=base64_encode("success");
				$m= base64_encode("Servicio Creado");


			     } catch (Exception $e) {
				 $m=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			         }
			    header("location: ../views/dashboard.php?p=".base64_encode("gestion_servicios")."&m=".$m."&tm=".$tm);
			 

   	    break;

   	   case 'u':


   		$codigo        = $_POST["codigo"];
        $codigo        =strtoupper($codigo);
   	    $nombre            = $_POST["nombre"];
   	    $nombre            =strtoupper($nombre);
   	    $descripcion      = $_POST["descripcion"];
   	    $descripcion   	  =strtoupper($descripcion);
   	    $duracion         =$_POST["duracion"];
   	    $valor_venta       = $_POST["valor_venta"];
   	    $iva               =$_POST["iva"];
   	    $descuento         =$_POST["descuento"];
   	    $id_empresa        =$_POST["id_empresa"];
   	    $autor             =$_POST["autor"];
   	    $id_servicio       =$_POST["id_servicio"];

		//try {
				//Gestion_Servicios::update($codigo,$nombre,$descripcion,$duracion,$valor_venta,$iva,$descuento,$id_empresa,$autor,$id_servicio);
				//$tm=base64_encode("ssucces");
				//$m= base64_encode("su registro se Actualizo correctamente :D");


			//} catch (Exception $e) {
				//$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			//}
			//header("location: ../views/gestion_servicios.php?m=".$m."&tm=".$tm);


				break;




		}
?>
