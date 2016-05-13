<?php 

if(isset($_GET["p"])){
	$page = base64_decode($_GET["p"]);
}else{
	$page = "";
}

switch ($page) {
	case 'gestion_usuarios':
		require_once("Gestion_usuarios.php");
	break;
	
	default:
		echo "bienvenido";
		break;
		
	case 'gestion_empresa':
		require_once("Gestion_empresa.php");
	break;
	
	default:
		echo "bienvenido";
		break;
}
?>