<?php
//1. llamar  la conexion de la base de datos
		require_once("../model/db_conn.php");
		//2. llamar las  clases necesarias o que se requieran
		require_once("../model/proveedores.class.php");
		//3. instanciamos las variables globales y una llamada  $accion
		// la variable accion nos va  a indicar  que parte cel crud vamos a crear.
		$accion=$_REQUEST["acc"];
		switch ($accion) {
			case 'c':
				# crear
				#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.

			$razon_social    =$_POST["razon_social"];
			$razon_social    =strtoupper($razon_social);
			$nit      	     =$_POST["nit"];
			$telefono 		 =$_POST["telefono"];
			$direccion       =$_POST["direccion"];
			$direccion       =strtoupper($direccion);
			$ciudad    	     =$_POST["ciudad"];
			$ciudad          =strtoupper($ciudad);
			$nombre_contacto =$_POST["nombre_contacto"];
			$nombre_contacto =strtoupper($nombre_contacto);
			$correo   	     =$_POST["correo"];
			$numero_cuenta	 =$_POST["numero_cuenta"];
			$estado          =$_POST["estado"];
		    $banco           =$_POST["banco"];
		    $banco           =strtoupper($banco);
			$autor			 =$_POST["autor"];
			$autor           =strtoupper($autor);
			echo $autor;
			$existente=Gestion_proveedores::veref_exist($nit);

				
			if($existente[2]==$nit){
				$tipomensaje = base64_encode("success"); 
				$m=  base64_encode("El nit del proveedor ya se encuentra en uso");
                header("location: ../views/dashboard.php?m=".$m."&tm=".$tipomensaje);

			 }else{
			 	
				try {
				Gestion_proveedores::Create($razon_social,$nit,$telefono,$direccion,$ciudad,$nombre_contacto,$correo,$numero_cuenta,$estado,$banco,$autor);
				$tipomensaje = base64_encode("success"); 
				$m= base64_encode("su registro se creo correctamente :D");	
						
			     } catch (Exception $e) {
				 $mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			         }
			    header("location: ../views/nuevo_proveedor.php?m=".$m."&tm=".$tipomensaje);
			 }



				break;
				case 'u':
				# Actualizar
				#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
			$razon_social    =$_POST["razon_social"];
			$razon_social    =strtoupper($razon_social);
			$nit      	     =$_POST["nit"];
			$telefono 		 =$_POST["telefono"];
			$direccion       =$_POST["direccion"];
			$direccion       =strtoupper($direccion);
			$ciudad    	     =$_POST["ciudad"];
			$ciudad          =strtoupper($ciudad);
			$nombre_contacto =$_POST["nombre_contacto"];
			$nombre_contacto =strtoupper($nombre_contacto);
			$correo   	     =$_POST["correo"];
			$numero_cuenta	 =$_POST["numero_cuenta"];
			$estado          =$_POST["estado"];
		    $banco           =$_POST["banco"];
		    $banco           =strtoupper($banco);
			$autor			 =$_POST["autor"];
			$autor           =strtoupper($autor);
			$id_proveedor    =$_POST["id_proveedor"];

			try {
				Gestion_proveedores::update($razon_social,$nit,$telefono,$direccion,$ciudad,$nombre_contacto,$correo,$numero_cuenta,$estado,$banco,$autor,$id_proveedor);

				$tipomensaje = base64_encode("success"); 
				$m= base64_encode("su registro se Actulizo correctamente :D");

				
				
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
		header("location: ../views/dashboard.php?m=".$m."&tm=".$tipomensaje);


				break;
			case 'd':
				# delete
				#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
			       
			$nit   	=$_POST["nit"];
			
			try {
				$tipomensaje = base64_encode("success"); 
				Gestion_proveedores::update($tipo_documento,$numero_documento,$clave,$nombre,$apellido,$telefono,$direccion,$correo,$celular,$fecha_nacimiento,$sexo,$estado,$id_rol,$autor,$oldnumerodedocumento);
				$mensaje= "se elimino correctamente :D";
				
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
			header("location: ../formusupub.php?msn=".$mensaje."&tm=".$tipomensaje);


				break;
			
			
			
			
		}
?>


