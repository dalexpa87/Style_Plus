<?php

$rol = "empresa";
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="Views/css/font-awesome.css">
	<link rel="stylesheet" href="Views/css/estilos.css">
	<title>Bienvenido a Style +</title>
</head>
<body>

	<header>
		<div id="navbar_up">
			<img src="Views/images/logo_web.png">
		</div>
		<nav id="menu">
			<?php include_once("Views/components/comp.menu.php"); ?>
		</nav>	
		
	<div class="wrap-content">
 		<?php include_once("pages.php"); ?>
 	</div>
	</header>
</body>
</html>