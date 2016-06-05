<?php
class Gestion_Servicios{

   function veref_exist($codigo,$id_empresa)
    {
        //instacioamos y nos conectamos a la  base de  datos
        $conexion=style_plus_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        //crear  el  query  que vamos a realizar.
        $consulta= "SELECT * FROM servicios WHERE codigo=? AND id_empresa=? ";
        $query=$conexion->prepare($consulta);
        $query->execute(array($codigo,$id_empresa));
        
        $resultado=$query->fetchALL(PDO::FETCH_BOTH);
        return $resultado;

        style_plus_BD::Disconnect();
    }

	function create($codigo,$nombre,$descripcion,$duracion,$valor_venta,$iva,$descuento,$id_empresa,$autor){
	 $conexion=style_plus_BD::Connect();
     $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //CAPTURAMOS LA  FECHA DEL SISTEMA
        $fecha_creacion=date("Y-m-d");
        
        
        //crear  el  quiery  que vamos a realizar.
        $consulta= "INSERT INTO servicios (codigo,nombre,descripcion,duracion,valor_venta,iva,descuento,id_empresa,fecha_creacion,autor) values(?,?,?,?,?,?,?,?,?,?)";
        $query=$conexion->prepare($consulta);
        $query->execute(array($codigo,$nombre,$descripcion,$duracion,$valor_venta,$iva,$descuento,$id_empresa,$fecha_creacion,$autor));

        style_plus_BD::Disconnect();
    }



	function Readbyempresa($id_empresa)
    {
        //instacioamos y nos conectamos a la  base de  datos
        $conexion=style_plus_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        //crear  el  query  que vamos a realizar.
        $consulta= "SELECT * FROM servicios WHERE id_empresa=? ";
        $query=$conexion->prepare($consulta);
        $query->execute(array($id_empresa));
        
        $resultado=$query->fetchALL(PDO::FETCH_BOTH);
        return $resultado;

        style_plus_BD::Disconnect();
    }
    function Readbyid($id_servicio)
    {
        //instacioamos y nos conectamos a la  base de  datos
        $conexion=style_plus_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        //crear  el  query  que vamos a realizar.
        $consulta= "SELECT * FROM servicios WHERE id_servicio=? ";
        $query=$conexion->prepare($consulta);
        $query->execute(array($id_servicio));
        
        $resultado=$query->fetch(PDO::FETCH_BOTH);
        return $resultado;

        style_plus_BD::Disconnect();
    }



 	function Readbycodigo($codigo){
 		$conexion=style_plus_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

 		$consulta= "DELETE FROM  WHERE id=?";

 		$query =$conexion-> prepare($consulta);
        $query->$execute(array($id));
    }


    function Update($codigo,$nombre,$descripcion,$duracion,$valor_venta,$iva,$descuento,$id_empresa,$autor,$id_servicio){
    	$conexion=style_plus_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $fecha_creacion=date("Y-m-d");

        $consulta= "UPDATE servicios SET codigo=?,nombre=?,descripcion=?, duracion=?,valor_venta=?, iva=?, descuento=?,id_empresa=?, fecha_creacion=?,autor=? WHERE id_servicio=?";
        $query=$conexion->prepare($consulta);
        $query->execute(array($codigo,$nombre,$descripcion,$duracion,$valor_venta,$iva,$descuento,$id_empresa,$fecha_creacion,$autor,$id_servicio));

        style_plus_BD::Disconnect();
    }


    function delete($id){
    	$conexion = style_plus:: connect();
    	$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    	$consulta= "DELETE FROM contacto WHERE id= ?";

    	$query =$conexion-> prepare($consulta);
        $query->$execute(array($id));
       
        style_plus::Disconnect();

    }



    


	}



?>
