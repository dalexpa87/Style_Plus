<?php
		//1. llamar  la conexion de la base de datos
		require_once("../Model/db_conn.php");
		//2. llamar las  clases necesarias o que se requieran
		require_once("../Model/empresa.class.php");
		//3. instanciamos las variables globales y una llamada  $accion
		// la variable accion nos va  a indicar  que parte cel crud vamos a crear.
		$accion=$_REQUEST["acc"];
		switch ($accion) {
			case 'c':
				# crear
				#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
			$razon_social   =$_POST["razon_social"];         
			$nit      		=$_POST["nit"];
			$telefono    	=$_POST["telefono"];
			$direccion   	=$_POST["direccion"];
			$correo      	=$_POST["correo"];
			$descripcion    =$_POST["descripcion"];
			$id_usuario		=$_POST["id_usuario"];
			$autor			=$_POST["autor"];
			
			try {
				Gestion_empresa::Create ($razon_social,$nit,$telefono,$direccion,$correo,$descripcion,$id_usuario,$autor);
				$mensaje= "La empresa se creo correctamente :D";
				
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
				Gestion_usuarios::update($tipo_documento,$numero_documento,$clave,$nombre,$apellido,$telefono,$direccion,$correo,$celular,$fecha_nacimiento,$sexo,$estado,$id_rol,$autor,$oldnumerodedocumento);
				$mensaje= "se elimino correctamente :D";
				
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
			header("location: ../formusupub.php?msn=".$mensaje);


				break;
			
			
			
			
		}
?>


