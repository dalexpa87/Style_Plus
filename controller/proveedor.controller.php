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
			$razon_social    =$_POST["razon_social"]);         
			$nit      	     =$_POST["nit"];
			$telefono 		 =$_POST["telefono"];
			$direccion       =$_POST["direccion"]);
			$ciudad    	     =$_POST["ciudad"]);
			$nombre_contacto =$_POST["nombre_contacto"]);
			$correo   	     =$_POST["correo"];
			$numero_cuenta	 =$_POST["numero_cuenta"];
			$estado          =$_POST["estado"];
		    $banco           =$_POST["banco"]);
			$autor			 =$_POST["autor"]);
			
			$existente=Gestion_Usuarios::veref_exist($nit);
				
			if($existente[2]==$numero_documento || $existente[9]==$correo){
				$m=base64_encode("Su  numero  de documento  o correo ya se encuentran en uso");
                header("location: ../views/index.php?m=".$m);

			 }else{
			 	
				try {
				Gestion_usuarios::Create($tipo_documento,$numero_documento,$clave,$nombre,$apellido,$telefono,$direccion,$ciudad,$correo,$celular,$fecha_nacimiento,$sexo,$estado,$id_rol,$autor);
				$m= base64_encode("su registro se creo correctamente :D");	
						
			     } catch (Exception $e) {
				 $m=base64_encode(":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine());
			         }
			    header("location: ../views/index.php?m=".$m);
			 }



				break;
				case 'u':
				# Actualizar
				#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
			$razon_social    	=$_POST["razon_social"];         
			$nit      	        =$_POST["nit"];
			$telefono 			=$_POST["telefono"];
			$direccion      	=$_POST["direccion"];
			$ciudad    	        =$_POST["ciudad"];
			$nombre_contacto    =$_POST["nombre_contacto"];
			$correo   	        =$_POST["correo"];
			$numero_cuenta	    =$_POST["numero_cuenta"];
			$banco          	=$_POST["banco"];
			$autor			    =$_POST["autor"];
			$oldnit           =$_POST["oldnit"];
			try {
				Gestion_proveedores::update($razon_social,$nit,$telefono,$direccion,$ciudad,$nombre_contacto,$correo,$numero_cuenta,$banco,$autor);
				$mensaje= "se ha  actualizado correctamente :D";
				
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
			header("location: ../formusupub.php?msn=".$mensaje);


				break;
			case 'd':
				# delete
				#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
			       
			$nit   	=$_POST["nit"];
			
			try {
				Gestion_proveedores::update($tipo_documento,$numero_documento,$clave,$nombre,$apellido,$telefono,$direccion,$correo,$celular,$fecha_nacimiento,$sexo,$estado,$id_rol,$autor,$oldnumerodedocumento);
				$mensaje= "se elimino correctamente :D";
				
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
			header("location: ../formusupub.php?msn=".$mensaje);


				break;
			
			
			
			
		}
?>


