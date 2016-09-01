<?php

Class Gestion_Citas{
  function Create ($id_usuario, $id_empleado, $id_servicio,$fecha_hora,$autor)
  {
    //instacioamos y nos conectamos a la  base de  datos
		$conexion=style_plus_BD::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//CAPTURAMOS LA  FECHA DEL SISTEMA
		$fecha_creacion=date("Y-m-d");


		//crear  el  quiery  que vamos a realizar.
		$consulta= "INSERT INTO citas (id_usuario,id_empleado, id_servicio, fecha_hora,fecha_creacion,autor) values(?,?,?,?,?,?)";
		$query=$conexion->prepare($consulta);
		$query->execute(array($id_usuario, $id_empleado, $id_servicio,$fecha_hora,$fecha_creacion,$autor));

		style_plus_BD::Disconnect();
	}
  function ReadAll()
	{

		$conexion=style_plus_BD::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


		$consulta= "SELECT * FROM citas";
		$query=$conexion->prepare($consulta);
		$query->execute();

		$resultado=$query->fetchALL(PDO::FETCH_BOTH);
		return $resultado;

		style_plus_BD::Disconnect();
	}


  function ReadByCita($id_empleado)
	{

		$conexion=style_plus_BD::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$consulta= "SELECT  usuario.nombre,usuario.apellido, servicios.nombre, citas.fecha_hora
    from citas inner join empleado on (empleado.id_empleado = citas.id_usuario)
	inner join servicios on (servicios.id_servicio = citas.id_servicio)
    inner join usuario on (usuario.id_usuario = citas.id_usuario)
    where empleado.id_empleado = ?
    order by nombre";

		$query=$conexion->prepare($consulta);
		$query->execute();

		$resultado=$query->fetchALL(PDO::FETCH_BOTH);
		return $resultado;

		style_plus_BD::Disconnect();
	}

}
 ?>
