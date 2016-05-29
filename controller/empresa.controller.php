<?php
		//1. llamar  la conexion de la base de datos
		require_once("../model/db_conn.php");
		//2. llamar las  clases necesarias o que se requieran
		require_once("../model/empresa.class.php");
		//3. instanciamos las variables globales y una llamada  $accion
		// la variable accion nos va  a indicar  que parte cel crud vamos a crear.
		$accion=$_REQUEST["acc"];
		switch ($accion) {
			case 'c':
				# crear
				#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
			$razon_social   =$_POST["razon_social"]; 
			$razon_social   =strtoupper($razon_social);        
			$nit      		=$_POST["nit"];
			$telefono    	=$_POST["telefono"];
			$direccion   	=$_POST["direccion"];
			$direccion      =strtoupper($direccion);
			$correo      	=$_POST["correo"];
			$descripcion    =$_POST["descripcion"];
			$descripcion    =strtoupper($descripcion);
			$estado		    =$_POST["estado"];
			$autor			=$_POST["autor"];
			$autor          =strtoupper($autor);

			
			$existente=Gestion_empresa::veref_exist($nit);
				
			if($existente[2]==$nit){
				$tm= base64_encode("warning");
				$m=  base64_encode("El nit de la  ya se encuentra en uso");
                header("location: ../views/dashboard.php?m=".$m."&tm=".$tm);

			 }else{
			 	
				try {
				Gestion_empresa::Create($razon_social,$nit,$telefono,$direccion,$correo,$descripcion,$estado,$autor);
				$tm=base64_encode("ssucces");
				$m= base64_encode("su registro se creo correctamente :D");	
						
			     } catch (Exception $e) {
				 $m=base64_encode(":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine());
			         }
			    header("location: ../views/dashboard.php?m=".$m."&tm=".$tm);
			 }

			break;
				case 'u':
				# Actualizar
				#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
			$razon_social   =$_POST["razon_social"]; 
			$razon_social   =strtoupper($razon_social);        
			$nit      		=$_POST["nit"];
			$telefono    	=$_POST["telefono"];
			$direccion   	=$_POST["direccion"];
			$direccion      =strtoupper($direccion);
			$correo      	=$_POST["correo"];
			$descripcion    =$_POST["descripcion"];
			$descripcion    =strtoupper($descripcion);
			$estado		    =$_POST["estado"];
			$autor			=$_POST["autor"];
			$autor          =strtoupper($autor);
			$id_empresa     =$_POST["id_empresa"];

			try {
				Gestion_empresa::Update($razon_social,$nit,$telefono,$direccion,$correo,$descripcion,$estado,$autor,$id_empresa);
				$m= base64_encode("se ha  actualizado correctamente :D");
				$tm=base64_encode("succes");
				
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
			header("location: ../views/dashboard.php?m=".$m."&tm=".$tm);
					

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


