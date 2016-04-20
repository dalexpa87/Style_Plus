<?php 
//El codigo comentado se debe  actualizar cuando este  la dasboard lista
  session_start();
  
  if(!isset($_SESSION["id_usuario"])){
  

   header("Location: index.php");
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="recursos/plugins/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="recursos/css/estilos.css">
	<title></title>
</head>
<body>
	<div id="navbar_up">
		<img src="recursos/img/logo_web.png">
	</div>
	<nav>
		<div id="menu">
			<?php include_once("components/comp.menu.php"); ?>
		</div>	
	</nav>
	
</body>
</html>