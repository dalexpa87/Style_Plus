<?php
	session_start();
		
		//1. llamar  la conexion de la base de datos
		require_once("../model/db_conn.php");
		//2. llamar las  clases necesarias o que se requieran
		require_once("../model/usuarios.class.php");
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
			
			
		    $existente=Gestion_Usuarios::veref_exist($correo,$numero);
				
			if($existente[2]==$numero_documento || $existente[9]==$correo){
				$tm=base64_encode("warning");
				$m=base64_encode("Su  numero  de documento  o correo ya se encuentran en uso");
                header("location: ../views/index.php?m=".$m."&tm=".$tm);

			 }else{
			 	
				try {
				Gestion_usuarios::Create($tipo_documento,$numero_documento,$clave,$nombre,$apellido,$telefono,$direccion,$ciudad,$correo,$celular,$fecha_nacimiento,$sexo,$estado,$id_rol,$autor);
				$m= base64_encode("su registro se creo correctamente :D");	
				$tm= "success";
				header("location: ../views/index.php?m=".$m."&tm=".$tm);
						
			     } catch (Exception $e) {
				 $m=base64_encode(":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine());
				 $tm= "error";
				  header("location: ../views/registrate.php?m=".$m."&tm=".$tm);
			         }
			   
			 }


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
			$correo      	=$_POST["correo"];
			$celular     	=$_POST["celular"];
			$fecha_nacimiento=$_POST["fecha_nacimiento"];
			$sexo        	=$_POST["sexo"];
			$estado         =$_POST["estado"];			
			$id_rol			=$_POST["id_rol"];
			$autor			=$_POST["autor"];
			$id_usuario =$_POST["id_usuario"];

			try {
				Gestion_usuarios::update($tipo_documento,$numero_documento,$clave,$nombre,$apellido,$telefono,$direccion,$ciudad,$correo,$celular,$fecha_nacimiento,$sexo,$estado,$id_rol,$autor,$id_usuario);
				$m= base64_encode("se ha  actualizado correctamente :D");
				$tm=base64_encode("Advertencia");
				
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
			header("location: ../views/dashboard.php?m=".$m."&tm=".$tm);


				break;
			case 'd':
				# delete
				#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
			       
			$id_usuario=base64_decode($_REQUEST["ui"]);
			
			try {
				Gestion_usuarios::desactivar($id_usuario);
				$m=base64_encode("se Desactivo correctamente :D");
				$tm=base64_encode("Advertencia");
				
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
			header("location: ../views/dashboard.php?m=".$m."&tm=".$tm);


				break;

		 case 'l':
				# loguear usuario
				#iniciamos las variables   que se envian desde el  formulario  
			       
			
			$correo      	=$_POST["correo"];
			$clave      	=$_POST["clave"];
			
			try {
				$usuario=Gestion_usuarios::loguear($correo,$clave);
				// El metodo count nos sirve para contar el numero de registros que retorno de la consulta
                $usuario_existe = count($usuario[0]);
				if($usuario_existe == 0){
				       $msn= base64_encode("Debe de Registrarse Primero");
				       $tipo_msn= base64_encode("warning");


				       header("Location: ../views/index.php?m=".$msn."&tm=".$tipo_msn);
				    }
				    elseif ($usuario[13]==0) {
				       $msn= base64_encode("El usuario se encuentra inactivo,Por favor comunicate con el Admin del sistema");
				       $tipo_msn= base64_encode("advertencia");

				       header("Location: ../views/index.php?m=".$msn."&tm=".$tipo_msn);
				    }
				    else{	
				    		if($usuario[14]==1 || $usuario[14]==4 ){
				    		// Creamos variables de SESSION las  que necesitemos en sesion


						      $_SESSION["id_usuario"]     = $usuario[0];
						      $_SESSION["nombre"]         = $usuario[4];
						      $_SESSION["apellido"]       = $usuario[5];
						      $_SESSION["id_rol"]         = $usuario[14];
						      header("Location: ../views/dashboard.php");
						    }else{
						    	$empresa=Gestion_usuarios::cons_empresa($usuario[0]);
						    	$_SESSION["id_usuario"]     = $usuario[0];
						        $_SESSION["nombre"]         = $usuario[4];
						        $_SESSION["apellido"]       = $usuario[5];
						        $_SESSION["id_rol"]         = $usuario[14];
						        $_SESSION["id_empresa"]       = $empresa[0];
						        $_SESSION["nombre_empresa"]         = $empresa[1];
						        header("Location: ../views/dashboard.php");



						    }
						}
						      
						      
						     
						     
			}catch (Exception $e) {
				$m= base64_encode("A ocurrido un error ".$e->getMessage());
				$tm = base64_encode("error");

				header("Location: ../views/index.php?m=".$m."&tm=".$tm);
				  }

				
			
			
			}
			
?>


