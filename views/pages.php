<?php

@$seccion = $_GET["s"];
@$page = $_GET["p"];

if($seccion != ""){ 
		include("Views/sections/".$seccion."/".$page.".php");
}else{
	echo "<h1>BIENVENIDOS A STYLE +</h1>";
}

?>