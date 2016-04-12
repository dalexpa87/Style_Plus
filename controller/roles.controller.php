<?php
		//1. llamar  la conexion de la base de datos
		require_once("../Model/db_conn.php");
		//2. llamar las  clases necesarias o que se requieran
		require_once("../Model/roles.class.php");
		//3. instanciamos las variables globales y una llamada  $accion
		// la variable accion nos va  a indicar  que parte cel crud vamos a crear.
		$accion=$_REQUEST["acc"];
		switch ($accion) {
			case 'c':
				# crear
				#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
			$nombre    	=$_POST["nombre"];         
			$autor     	=$_POST["autor"];
			
			try {
				Gestion_roles::Create($nombre,$autor);
				$mensaje= "su registro se creo correctamente :D";
				
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
			header("location: ../index.php?msn=".$mensaje);


				break;
			/*case 'r':
				# buscar
				#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
			$nombre    	=$_POST["nombre"];         
			
			
			try {
				Gestion_roles::Create($nombre);
				$mensaje= "su registro se creo correctamente :D";
				
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
			header("location: ../FORMULARIO.php?msn=".$mensaje);


				break;*/
			case 'u':
				# update
				#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
			$nombre    	=$_POST["nombre"];         
			$autor     	=$_POST["autor"];
			$oldnombre  =$_POST["oldnombre"];
			
			try {
				Gestion_roles::update($nombre,$autor,$oldnombre);
				$mensaje= "su registro se  Actualizo correctamente :D";
				
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
			header("location: ../index.php?msn=".$mensaje);
			break;

			case 'd':
				# delete
				#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
			$nombre    	=$_POST["nombre"];         
						
			try {
				Gestion_roles::delete($nombre);
				$mensaje= "El rol se elimino con exito :D";
				
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
			header("location: ../index.php?msn=".$mensaje);
			break;




			
			
		}
?>

