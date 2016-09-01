
<?php
session_start();

  //1. llamar  la conexion de la base de datos
  require_once("../model/db_conn.php");
  //2. llamar las  clases necesarias o que se requieran
  require_once("../model/citas.class.php");
  //3. instanciamos las variables globales y una llamada  $accion
  // la variable accion nos va  a indicar  que parte cel crud vamos a crear.
  $accion=$_REQUEST["acc"];
  switch ($accion) {
    case 'c':
      # crear
      #iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
        $id_usuario = $_POST["id_usuario"];
        $id_empleado = $_POST["id_empleado"];
        $id_servicio = $_POST["id_servicio"];
        $fecha_hora = $_POST["fecha_hora"];
        $fecha_creacion = $_POST["fecha_creacion"];
        $autor = $_POST["autor"];


      $existente=Gestion_Usuarios::veref_exist($correo,$numero);

    if($existente[2]==$numero_documento || $existente[9]==$correo){
      $tm=base64_encode("warning");
      $m=base64_encode("Su  numero  de documento  o correo ya se encuentran en uso");
              header("location: ../views/index.php?m=".$m."&tm=".$tm);

     }else{

      try {
      Gestion_usuarios::Create($tipo_documento,$numero_documento,$clave,$nombre,$apellido,$telefono,$direccion,$ciudad,$correo,$celular,$fecha_nacimiento,$sexo,$estado,$id_rol,$autor);
      $msn= base64_encode("Su registro se creo correctamente :D");
      $tm= "success";
      header("location: ../views/index.php?m=".$msn."&tm=".$tm);

         } catch (Exception $e) {
       $m=base64_encode(":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine());
       $tm= "error";
        header("location: ../views/registrate.php?m=".$m."&tm=".$tm);
             }
 ?>
 
<?php
 session_start();

include_once("../Model/db_conn.php");
include_once("../Model/Citas.class.php");


	$accion=$_REQUEST["acc"];
	switch ($accion) {

	case 'create':


	$Cod_usu=$_POST["Cod_usu"];
	$Telefono=$_POST["Telefono"];
	$Fecha=$_POST["Fecha"];
	$Hora=$_POST["Hora"];
	$Formato=$_POST["Formato"];
	$Servicio=$_POST["Cod_serv"];
	$empleado=$_POST["Cod_empl"];
	$Cod_Emp=$_POST["Cod_Emp"];


	try{

		 $_SESSION["Cod_Emp"] = $Cod_Emp;
		Gestionar_citas::Create($Cod_usu,$Telefono,$Fecha,$Hora,$Formato,$Servicio,$empleado,$Cod_Emp);
		$mensaje="Su cita fue reservada con exito";
		$tipomensaje = "success";
		header("Location: ../View/perfilEm.php?m=".$mensaje."&tm=".$tipomensaje);
	}catch(Exception $e){
		$mensaje="ha ocurrido un error, el error fue:".$e->getMessage()."en el archivo:".$e->getFile()."en la linea:".$e->getLine();
		$tipomensaje="error";
		header("Location: ../View/perfilEm.php?m=".$mensaje."&tm=".$tipomensaje);

	}

	break;

	case 'U':

	$Cod_Emp=$_POST["Cod_Emp"];
	$Cod_usu=$_POST["Cod_usu"];
	$Telefono=$_POST["Telefono"];
	$Fecha=$_POST["Fecha"];
	$Hora=$_POST["Hora"];
	$Estado=$_POST["Estado"];
	$Cod_serv=$_POST["Cod_serv"];
	$Cod_empl=$_POST["Cod_empl"];

	try{
		Gestionar_citas::Update($Cod_Emp,$Cod_usu,$Telefono,$Fecha,$Hora,$Estado,$Cod_serv,$Cod_empl);
		$mensaje="la cita se modifico correctamente";
		$tipomensaje="success";
		// if ($_SESSION["Perfil"] =="Administrador") {

		// header("Location: ../View/Gestion_Citas.php?m=".$mensaje."&tm=".$tipomensaje);
		// }
		// elseif ($_SESSION["Perfil"] =="Usuario") {

		// 	header("Location: ../View/Mi_Cita.php?m=".$mensaje."&tm=".$tipomensaje);
		// }




		}catch(Exception $e){
			$mensaje="ha ocurrido un error, el error fue:".$e->getMessage()."en el archivo:".$e->getFile()."en la linea:".$e->getLine();
			$tipomensaje="error";
			// header("Location: ../View/Modificar_Cita.php?m=".$mensaje."&tm=".$tipomensaje);

		}


		break;

	case 'D':

	try{
		Gestionar_citas::Delete(base64_decode($_REQUEST["ui"]));
		$mensaje="la cita se elimino correctamente";
		$tipomensaje="success";
		header("Location: ../View/Gestion_Citas.php?m=".$mensaje."&tm=".$tipomensaje);

	}catch(Exception $e){
		$mensaje="ha ocurrido un error, el error fue:".$e->getMessage()."en el archivo:".$e->getFile()."en la linea:".$e->getLine();
		$tipomensaje="error";
		header("Location: ../View/Gestion_Citas.php?m=".$mensaje."&tm=".$tipomensaje);

	}

	break;
    // citas validacion con ajax
	case 'valida_citas':
	  	$Fecha = $_POST["fecha_cita"];
	  	$Hora = $_POST["hora"];
	  	$empleado = $_POST["empleado"];
	  	$formato = $_POST["formato"];

	  	try{
	  		$cita = Gestionar_citas::ValidoCita($Fecha, $Hora, $empleado, $formato);

	  		if($cita[0] != ""){
	  			$existe = true;
	  			$message = "Este horario ya se encuentra ocupado.";
	  		}else{
	  			$existe = false;
	  			$message = "";
	  		}
	  	}catch(Exception $e){
	  		echo $e->getMessage();
	  	}


	  	echo json_encode(array('ue' => $existe, 'msn' => $message));

	  break;

}


 ?>
>>>>>>> origin/master
