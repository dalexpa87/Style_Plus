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
