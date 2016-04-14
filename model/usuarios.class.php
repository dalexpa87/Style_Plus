<?php
# -> class: GEstion_Contactos
#->method(s): create(),ReadAll,readbydocumento(),ReadbyName(),update, delete(),loguear(),
# Author:@yohanny_116

class Gestion_usuarios {
	//metodo crear
	// este  metodo  guardara  en la tabla  contactos   todos  los parametros desde el  formulario.
	function Create($tipo_documento,$numero_documento,$clave,$nombre,$apellido,$telefono,$direccion,$ciudad,$correo,$celular,$fecha_nacimiento,$sexo,$estado,$id_rol,$autor)
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=style_plus_BD::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//CAPTURAMOS LA  FECHA DEL SISTEMA
		$fecha_creacion=date("Y-m-d");
		
		
		//crear  el  quiery  que vamos a realizar.
		$consulta= "INSERT INTO usuario (tipo_documento,numero_documento,clave,nombre,apellido,telefono,direccion,ciudad,correo,celular,fecha_nacimiento,sexo,estado,id_rol,fecha_creacion,autor) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$query=$conexion->prepare($consulta);
		$query->execute(array($tipo_documento,$numero_documento,$clave,$nombre,$apellido,$telefono,$direccion,$ciudad,$correo,$celular,$fecha_nacimiento,$sexo,$estado,$id_rol,$fecha_creacion,$autor));

		style_plus_BD::Disconnect();
	}
	//Metodo  consultar  todos
	function ReadAll()
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=style_plus_BD::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		//crear  el  query  que vamos a realizar.
		$consulta= "SELECT * FROM usuario ORDER BY nombre";
		$query=$conexion->prepare($consulta);
		$query->execute();
		// devolmemos el resultado en un arreglo
		//Fetch:Es  el  resultado que arroja la   consultta   en forma   de vector   o matris  segun sea el caso
		//para  consultas donde arroja mas de un dato    el  fetch  debe  ir  acompañado   con la  palabra ALL
		$resultado=$query->fetchALL(PDO::FETCH_BOTH);
		return $resultado;

		style_plus_BD::Disconnect();
	}
function Readbydocumento($numero_documento)
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=style_plus_BD::conect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		//crear  el  query  que vamos a realizar.
		$consulta= "SELECT * FROM usuario WHERE numero_documento=?";
		$query=$conexion->prepare($consulta);
		$query=execute(array($numero_documento));
		// devolmemos el resultado en un arreglo
		//Fetch:Es  el  resultado que arroja la   consultta   en forma   de vector   o matris  segun sea el caso
		//para  consultas donde arroja mas de un dato    el  fetch  debe  ir  acompañado   con la  palabra ALL
		$resultado=$query->fetch(PDO::FETCH_BOTH);
		return $resultado;

		style_plus_BD::Disconnect();
	}
	//METODO UPDATE
	function update($tipo_documento,$numero_documento,$clave,$nombre,$apellido,$telefono,$direccion,$ciudad,$correo,$celular,$fecha_nacimiento,$sexo,$estado,$id_rol,$autor,$fecha_creacion,$oldnumerodedocumento)
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=style_plus_BD::conect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//CAPTURAMOS LA  FECHA DEL SISTEMA
		//crear  el  quiery  que vamos a realizar.
		$consulta= "UPDATE usuario SET tipo_documento=?,numero_documento=?, clave=?, =?,nombre=?,apellido=?,telefono=?,direccion=?,ciudad=?,correo=?,celular=?,fecha_nacimiento=?,sexo=?,estado=?,id_rol=?,autor=?,fecha_creacion=?  WHERE numero_documento=?  ";
		$query=$conexion->prepare($consulta);
		$query=execute(array($tipo_documento,$numero_documento,$clave,$nombre,$apellido,$telefono,$direccion,$ciudad,$correo,$celular,$fecha_nacimiento,$sexo,$estado,$id_rol,$autor,$fecha_creacion,$oldnumerodedocumento));

		style_plus_BD::Disconnect();
	}
 	function delete($numero_documento)
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=style_plus_BD::conect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//CAPTURAMOS LA  FECHA DEL SISTEMA
		//crear  el  quiery  que vamos a realizar.
		$consulta= "DELETE FROM usuario WHERE numero_documento=?  ";
		$query=$conexion->prepare($consulta);
		$query=execute(array($numero_documento));

		style_plus_BD::Disconnect();
	}
	function loguear($correo,$clave)
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=style_plus_BD::conect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		//crear  el  query  que vamos a realizar.
		$consulta= "SELECT * FROM usuario WHERE correo=?,clave=?";
		$query=$conexion->prepare($consulta);
		$query=execute(array($numero_documento,$clave));
		// devolmemos el resultado en un arreglo
		//Fetch:Es  el  resultado que arroja la   consultta   en forma   de vector   o matris  segun sea el caso
		//para  consultas donde arroja mas de un dato    el  fetch  debe  ir  acompañado   con la  palabra ALL
		$resultado=$query->fetch(PDO::FETCH_BOTH);
		return $resultado;

		style_plus_BD::Disconnect();
	}
}
?>