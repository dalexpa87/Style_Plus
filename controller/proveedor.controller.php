<?php
//1. llamar  la conexion de la base de datos
		require_once("../Model/db_conn.php");
		//2. llamar las  clases necesarias o que se requieran
		require_once("../Model/proveedores.class.php");
		//3. instanciamos las variables globales y una llamada  $accion
		// la variable accion nos va  a indicar  que parte cel crud vamos a crear.
		$accion=$_REQUEST["acc"];
		switch ($accion) {
			case 'c':
				# crear
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
			
			try {
				Gestion_proveedores::Create($razon_social,$nit,$telefono,$direccion,$ciudad,$nombre_contacto,$correo,$numero_cuenta,$banco,$autor);
				$mensaje= "su registro se creo correctamente :D";
				
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
			header("location: ../views/iniciosesion.php?msn=".$mensaje);


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


