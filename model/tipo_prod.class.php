<?php

class Gestion_tipo_producto {
	//metodo crear
	// este  metodo  guardara  en la tabla  contactos   todos  los parametros desde el  formulario.
	function Create($nombre,$autor)
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=style_plus_BD::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);	
		//crear  el  quiery  que vamos a realizar.
		$consulta= "INSERT INTO tipo_producto (nombre,autor,fecha_creacion) values(?,?,now())";
		$query=$conexion->prepare($consulta);
		$query->execute(array($nombre,$autor));

		style_plus_BD::Disconnect();
	}
	//Metodo  consultar  todos
	function ReadAll()
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=style_Plus_BD::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		$consulta= "SELECT * FROM tipo_producto ORDER BY nombre";
		$query=$conexion->prepare($consulta);
		$query->execute();
		// devolmemos el resultado en un arreglo
		//Fetch:Es  el  resultado que arroja la   consultta   en forma   de vector   o matris  segun sea el caso
		//para  consultas donde arroja mas de un dato    el  fetch  debe  ir  acompañado   con la  palabra ALL
		$resultado=$query->fetchALL(PDO::FETCH_BOTH);
		return $resultado;

		style_Plus_BD::Disconnect();
	}
	
	//METODO UPDATE
	function update($nombre,$autor,$oldnombre)
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=style_Plus_BD::conect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//CAPTURAMOS LA  FECHA DEL SISTEMA
		//crear  el  quiery  que vamos a realizar.
		$consulta= "UPDATE tipo_producto SET nombre=?, author=?,fecha_creacion=nom() WHERE nombre=?  ";
		$query=$conexion->prepare($consulta);
		$query=execute(array($nombre,$autor));

		laboratorio_BD::Disconnect();
	}
 	function delete($nombre)
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=style_Plus_BD::conect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//CAPTURAMOS LA  FECHA DEL SISTEMA
		//crear  el  quiery  que vamos a realizar.
		$consulta= "DELETE FROM tipo_producto WHERE nombre=?  ";
		$query=$conexion->prepare($consulta);
		$query=execute(array($nombre));

		style_Plus_BD::Disconnect();
	}
}
?>