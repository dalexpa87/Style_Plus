<?php

class Gestion_Proveedores{
	function Create(razon_social, nit, telefono, direccion, ciudad, nombre_contacto, correo, numero_cuenta, banco, autor)
	{
		$conexion = style_plus::Connect();
		$conexion = SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$fechacreacion=date("Y-m-d");
		
		$consulta= "INSERT INTO proveedor(razon_social, nit, telefono, direccion, ciudad, nombre_contacto, correo, numero_cuenta, banco, autor, fechacreacion)values(?,?,?,?,?,?,?,?,?,?)";
		$fechacreacion=date("Y-m-d");
		$query=conexion ->prepare ($consulta);
		$query->execute (array ($razon_social, $nit, $telefono, $direccion, $ciudad, $nombre_contacto, $correo, $numero_cuenta, $banco, $autor, $fecha_creacion))

		style_plus::Disconnet();

	}
	function ReadAll()
	{
		
		$conexion=style_plus::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$consulta= "SELECT * FROM proveedor ORDER BY nombre";
		$query=$conexion->prepare($consulta);
		$query->execute();
		
		$resultado=$query->fetchALL(PDO::FETCH_BOTH);
		return $resultado;

		style_plus::Disconnect();
	}
	function update(razon_social, nit, telefono, direccion, ciudad, nombre_contacto, correo, numero_cuenta, banco, autor)
	{
		
		$conexion=style_plus::conect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$fecha_creacion=date("Y-m-d");
		$consulta= "UPDATE proveedor SET razon_social=?,nit=?, telefono=?, direccion=?,ciudad=?,nombre_contacto=?,correo=?,numero_cuenta=?,banco=?,fecha_creacion=?  WHERE nit=?  ";
		$query=$conexion->prepare($consulta);
		$query=execute($array($razon_social, $nit, $telefono, $direccion, $ciudad, $nombre_contacto, $correo, $numero_cuenta, $banco, $autor, $fecha_creacion));

		laboratorio_BD::Disconnect();
	}
	function delete($nit)
	{
		
		$conexion=style_plus::conect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		$consulta= "DELETE FROM proveedor  WHERE nit=?  ";
		$query=$conexion->prepare($consulta);
		$query=execute(array($nit));

		laboratorio_BD::Disconnect();
}

?>
