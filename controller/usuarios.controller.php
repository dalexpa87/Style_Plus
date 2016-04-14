<?php
		//1. llamar  la conexion de la base de datos
		require_once("../Model/db_conn.php");
		//2. llamar las  clases necesarias o que se requieran
		require_once("../Model/usuarios.class.php");
		//3. instanciamos las variables globales y una llamada  $accion
		// la variable accion nos va  a indicar  que parte cel crud vamos a crear.
		$accion=$_REQUEST["acc"];
		switch ($accion) {
			case 'c':
				# crear
				#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
			$tipo_documento     	=$_POST["tipo_documento"];         
			$numero_documento      	=$_POST["numero_documento"];
			$clave 			=$_POST["clave"];
			$nombre      	=$_POST["nombre"];
			$apellido    	=$_POST["apellido"];
			$telefono    	=$_POST["telefono"];
			$direccion   	=$_POST["direccion"];
			$ciudad			=$_POST["ciudad"];
			$correo      	=$_POST["correo"];
			$celular     	=$_POST["celular"];
			$fecha_nacimiento=$_POST["fecha_nacimiento"];
			$sexo        	=$_POST["sexo"];
			$estado         =$_POST["estado"];			
			$id_rol			=$_POST["id_rol"];
			$autor			=$_POST["autor"];
			
			try {
				Gestion_usuarios::Create($tipo_documento,$numero_documento,$clave,$nombre,$apellido,$telefono,$direccion,$ciudad,$correo,$celular,$fecha_nacimiento,$sexo,$estado,$id_rol,$autor);
				$mensaje= "su registro se creo correctamente :D";
				
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
			header("location: ../views/iniciosesion.php?msn=".$mensaje);


				break;
				case 'u':
				# Actualizar
				#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
			$tipo_documento     	=$_POST["tipo_documento"];         
			$numero_documento      	=$_POST["numero_documento"];
			$clave 			=$_POST["clave"];
			$nombre      	=$_POST["nombre"];
			$apellido    	=$_POST["apellido"];
			$telefono    	=$_POST["telefono"];
			$direccion   	=$_POST["direccion"];
			$ciudad			=$_POST["ciudad"];
			$correo      	=$_POST["email"];
			$celular     	=$_POST["celular"];
			$fecha_nacimiento=$_POST["fecha_nacimiento"];
			$sexo        	=$_POST["sexo"];
			$estado         =$_POST["Estado"];			
			$id_rol			=$_POST["id_rol"];
			$autor			=$_POST["autor"];
			$oldnumerodedocumento =$_POST["oldnumerodedocumento"];
			try {
				Gestion_usuarios::update($tipo_documento,$numero_documento,$clave,$nombre,$apellido,$telefono,$direccion,$correo,$celular,$fecha_nacimiento,$sexo,$estado,$id_rol,$oldnumerodedocumento);
				$mensaje= "se ha  actualizado correctamente :D";
				
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
			header("location: ../formusupub.php?msn=".$mensaje);


				break;
			case 'd':
				# delete
				#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
			       
			$numero_documento      	=$_POST["numero_documento"];
			
			try {
				Gestion_usuarios::delete($numero_documento);
				$mensaje= "se elimino correctamente :D";
				
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
			header("location: ../formusupub.php?msn=".$mensaje);


				break;

		 case 'l':
				# loguear usuario
				#iniciamos las variables   que se envian desde el  formulario  
			       
			
			$correo      	=$_POST["correo"];
			$clave      	=$_POST["clave"];
			
			try {
				Gestion_usuarios::update($correo,$clave);
				$mensaje= "inicio de sesion correcto :D";
				
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
			header("location: ../formusupub.php?msn=".$mensaje);


				break;
			
			
			
			
		}
?>


