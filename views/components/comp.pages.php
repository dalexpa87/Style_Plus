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
		
		break;
		
	case 'gestion_empresa':
		require_once("Gestion_empresa.php");
	break;
	
	default:
		
		break;
	case 'actualizar_usuario':
		
		require_once("ActualizarUsuario.php");
	break;
	
	default:
		
		break;
	case 'nuevo_usuario':
		
		require_once("nuevo_usuario.php");
	break;
	
	default:

}
?>