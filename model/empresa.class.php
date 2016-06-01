<?php
# -> class: GEstion_Contactos
#->method(s): create(),ReadAll,readbydocumento(),ReadbyName(),update, delete(),loguear(),
# Author:@yohanny_116

class Gestion_empresa {
	//metodo crear
	// este  metodo  guardara  en la tabla  contactos   todos  los parametros desde el  formulario.
	function Create($razon_social,$nit,$telefono,$direccion,$correo,$descripcion,$estado,$autor)
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=style_plus_BD::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//CAPTURAMOS LA  FECHA DEL SISTEMA
		$fecha_creacion=date("Y-m-d");
		
		
		//crear  el  quiery  que vamos a realizar.
		$consulta= "INSERT INTO empresa (razon_social,nit,telefono,direccion,correo,descripcion,estado,fecha_creacion,autor) values(?,?,?,?,?,?,?,?,?)";
		$query=$conexion->prepare($consulta);
		$query->execute(array($razon_social,$nit,$telefono,$direccion,$correo,$descripcion,$estado,$fecha_creacion,$autor));

		style_plus_BD::Disconnect();
	}
	//Metodo  consultar  todos
	function ReadAll()
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=style_plus_BD::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		//crear  el  query  que vamos a realizar.
		$consulta= "SELECT * FROM empresa";
		$query=$conexion->prepare($consulta);
		$query->execute();
		// devolmemos el resultado en un arreglo
		//Fetch:Es  el  resultado que arroja la   consultta   en forma   de vector   o matris  segun sea el caso
		//para  consultas donde arroja mas de un dato    el  fetch  debe  ir  acompañado   con la  palabra ALL
		$resultado=$query->fetchALL(PDO::FETCH_BOTH);
		return $resultado;

		style_plus_BD::Disconnect();
	}
function Readbyid($id_empresa)
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=style_plus_BD::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		//crear  el  query  que vamos a realizar.
		$consulta= "SELECT * FROM empresa WHERE id_empresa=?";
		$query=$conexion->prepare($consulta);
		$query->execute(array($id_empresa));
		// devolmemos el resultado en un arreglo
		//Fetch:Es  el  resultado que arroja la   consultta   en forma   de vector   o matris  segun sea el caso
		//para  consultas donde arroja mas de un dato    el  fetch  debe  ir  acompañado   con la  palabra ALL
		$resultado=$query->fetch(PDO::FETCH_BOTH);
		return $resultado;

		style_plus_BD::Disconnect();
	}
	//METODO UPDATE
	function update($razon_social,$nit,$telefono,$direccion,$correo,$descripcion,$estado,$autor,$id_empresa)
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=style_plus_BD::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//CAPTURAMOS LA  FECHA DEL SISTEMA
		//CAPTURAMOS LA  FECHA DEL SISTEMA
		$fecha_creacion=date("Y-m-d");
		//crear  el  quiery  que vamos a realizar.
		$consulta= "UPDATE empresa SET razon_social=?,nit=?, telefono=?, direccion=?, correo=?,descripcion=?,estado=?,fecha_creacion=?, autor=?  WHERE id_empresa=?  ";
		$query=$conexion->prepare($consulta);
		$query->execute(array($razon_social,$nit,$telefono,$direccion,$correo,$descripcion,$estado,$fecha_creacion,$autor,$id_empresa));

		style_plus_BD::Disconnect();
	}

	function veref_exist($nit)
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=style_plus_BD::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		//crear  el  query  que vamos a realizar.
		$consulta= "SELECT * FROM empresa WHERE nit=? ";
		$query=$conexion->prepare($consulta);
		$query->execute(array($nit));
		
		$resultado=$query->fetch(PDO::FETCH_BOTH);
		return $resultado;

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
	
}
?>
