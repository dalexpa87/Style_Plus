<?php
class gestion_productos{


	function create($referencia,$nombre,$valor_compra,$valor_venta,$id_tipoproductos,$id_proveedor,$autor){
	   $conexion = style_plus:: connect();
	   $conexion = setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	   $consulta = "INSERT INTO contactos($referencia,$nombre,$valor_compra,$valor_venta,$id_tipoproductos,$id_proveedor,autor,fecha_creacion) VALUES (?,?,?,?,?,?,?,now())";

	   $query = $conexion -> prepare($consulta);
	   $query -> execute(array($referencia,$nombre,$valor_compra,$valor_venta,$id_tipoproductos,$id_proveedor,$autor));

	   style_plus:: Disconnect();




	function realAll(){
		$conexion = style_plus:: connect();
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$consulta = "SELECT * FROM contactos ORDER BY nombre"

		$query = $conexion->prepare($consulta);
 		$query ->execute();

 		$resultado=$query ->fetchALL(PDO::FETCH_BOTH);
 		return $resultado;

 		style_plus:: Disconnect();



 	function ReadReference($referencia){
 		$conexion = style_plus:: connect();
 		$conexion-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

 		$consulta= "DELETE FROM contactos WHERE id=?";

 		$query =$conexion-> prepare($consulta);
        $query->$execute(array($id));



    function Update($referencia,$nombre,$valor_compra,$valor_venta,$id_tipoproductos,$id_proveedor,$autor){
    	$conexion = style_plus::conect();
        $conexion-> SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $consulta= "UPDATE contactos SET referencia=?,nombre=?,valor_compra=?,valor_venta=?,id_tipoproductos=?,id_proveedor=?,autor=? WHERE nombre=?";
        $query=$conexion->prepare($consulta);
        $query=execute(array($referencia,$nombre,$valor_compra,$valor_venta,$id_tipoproductos,$id_proveedor,$autor));

        style_plus::Disconnect();


    function delete($id){
    	$conexion = style_plus:: connect();
    	$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    	$consulta= "DELETE FROM contacto WHERE id= ?";

    	$query =$conexion-> prepare($consulta);
        $query->$execute(array($id));
       
        style_plus::Disconnect();

    }
}


    }
}

	}


}
?>
