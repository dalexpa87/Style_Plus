<?php 

if($_SESSION["id_rol"]==1){
?>

<ul>
	
	
	<div id="historia">
		<div><li><i class="fa fa-check-square-o" style="font-size: 55px; text-align: center; color: white; margin-left: 30px;padding-bottom: 2px"></i></li></div>
		<div><p>Informes</p></div>
	</div>

	<div id="citas">
		<div><li><i class="fa fa-calendar-plus-o" style="font-size: 55px; text-align: center; color: white; margin-left: 30px;padding-bottom: 2px"></i></li></div>
		<div><p>Inventario</p></div>
	</div>
	<div id="ofertas">
		<div><li><i class="fa fa-tag" style="font-size: 55px; text-align: center; color: white; margin-left: 30px;padding-bottom: 2px"></i></li></div>
		<div><p>Ofertas</p></div>
	</div>
	
</ul>

<?php
}elseif($_SESSION["id_rol"]==2){
?>
<ul >
	<div id="gest_con">
		<div><li><i class="fa fa-usd" style="font-size: 55px; text-align: center; color: white; margin-left: 32px; padding-top: 2px"></i></li><p>Gestion Contable</p></div>
		
	</div>
	<div id="inventario">
		<div><li><i class="fa fa-check-square-o" style="font-size: 55px; text-align: center; color: white; margin-left: 30px;padding-bottom: 2px"></i></li></div>
		<div><p>Inventario</p></div>
	</div>
	<div id="informes">
		<div><li><i class="fa fa-pencil-square-o" style="font-size: 55px; text-align: center; color: white; margin-left: 30px;padding-bottom: 2px"></i></li></div>
		<div><p>Informes</p></div>
	</div>

	<div id="citas">
		<div><li><i class="fa fa-calendar-plus-o" style="font-size: 55px; text-align: center; color: white; margin-left: 30px;padding-bottom: 2px"></i></li></div>
		<div><p>Inventario</p></div>
	</div>
	<div id="ofertas">
		<div><li><i class="fa fa-tag" style="font-size: 55px; text-align: center; color: white; margin-left: 30px;padding-bottom: 2px"></i></li></div>
		<div><p>Ofertas</p></div>
	</div>
	
</ul>


<?php
}elseif($_SESSION["id_rol"]==3){//1 Usuario Publico, 2 Empleado, 3 Cliente Admin, 4 Administador

?>

<ul id="menu_elements">
	<div id="gest_con">
		<div><li><i class="fa fa-usd" style="font-size: 55px; color: white"></i></li></div>
		<div><p>Gestion Contable</p></div>
	</div>
	<div id="inventario">
		<div><li><i class="fa fa-check-square-o" style="font-size: 55px; color: white"></i></li></div>
		<div><p>Inventario</p></div>
	</div>
	<div id="informes">
		<div><li><i class="fa fa-pencil-square-o" style="font-size: 55px; color: white"></i></li></div>
		<div><p>Informes</p></div>
	</div>

	<div id="citas">
		<div><li><i class="fa fa-calendar-plus-o" style="font-size: 55px; color: white"></i></li></div>
		<div><p>Inventario</p></div>
	</div>
	<div id="ofertas">
		<div><li><i class="fa fa-tag" style="font-size: 55px; color: white"></i></li></div>
		<div><p>Ofertas</p></div>
	</div>
	<div id="empleados">
		<div><li><i class="fa fa-users " style="font-size: 55px; color: white"></i></li><p>Gestion Empleados</p></div>
		
	</div>
</ul>



<?php

	}elseif($_SESSION["id_rol"]==4){

?>
<ul >
	<div class="icono">
		<div><li><i class="fa fa-usd" style="font-size: 55px; text-align: center; color: white; margin-left: 32px"></i></li></div>
		<div><p>Gestion Contable</p></div>
	</div>
	<div class="icono">
		<div><li><i class="fa fa-check-square-o" style="font-size: 55px; text-align: center; color: white; margin-left: 30px;"></i></li></div>
		<div><p>Inventario</p></div>
	</div>
	<div class="icono">
		<div><li><i class="fa fa-pencil-square-o" style="font-size: 55px; text-align: center; color: white; margin-left: 30px;"></i></li></div>
		<div><p>Informes</p></div>
	</div>

	<div class="icono">
		<a href="dashboard.php?p=<?php echo base64_encode('gestion_empresa')?>" >
		<div><li><i class="fa fa-industry" style="font-size: 55px; text-align: center; color: white; margin-left: 30px;"></i></li></div>
		<div><p>Gestionar Empresas</p></div>
	</a>
	</div>
	<div class="icono">
	<a href="dashboard.php?p=<?php echo base64_encode('gestion_usuarios')?>" >
		<div><li ><i class="fa fa-users " style="font-size: 55px; text-align: center; color: white; margin-left: 30px;"></i></li></div>
		<div><p>Gestion Usuario</p></div>
	</a>
	</div>
	
</ul>


<?php
	

}elseif($_SESSION["id_rol"]==5){//1 Usuario Publico, 2 Empleado, 3 Cliente Admin, 4 Administador

?>

<ul id="menu_elements">
	<div id="gest_con">
		<div><li><i class="fa fa-usd" style="font-size: 55px; text-align: center; color: white; margin-left: 32px; padding-top: 2px"></i></li></div>
		<div><p>Gestion Contable</p></div>
	</div>
	<div id="inventario">
		<div><li><i class="fa fa-check-square-o" style="font-size: 55px; text-align: center; color: white; margin-left: 30px;padding-bottom: 2px"></i></li></div>
		<div><p>Inventario</p></div>
	</div>
	<div id="informes">
		<div><li><i class="fa fa-pencil-square-o" style="font-size: 55px; text-align: center; color: white; margin-left: 30px;padding-bottom: 2px"></i></li></div>
		<div><p>Informes</p></div>
	</div>

	<div id="citas">
		<div><li><i class="fa fa-calendar-plus-o" style="font-size: 55px; text-align: center; color: white; margin-left: 30px;padding-bottom: 2px"></i></li></div>
		<div><p>Inventario</p></div>
	</div>
	<div id="ofertas">
		<div><li><i class="fa fa-tag" style="font-size: 55px; text-align: center; color: white; margin-left: 30px;padding-bottom: 2px"></i></li></div>
		<div><p>Ofertas</p></div>
	</div>
	<div id="empleados">
		<div><li><i class="fa fa-users " style="font-size: 55px; text-align: center; color: white; margin-left: 30px;padding-bottom: 2px"></i></li></div>
		<div><p>Gestion Empleados</p></div>
	</div>
</ul>



<?php

	}elseif($_SESSION["id_rol"]==6){

?>


<ul id="menu_elements">
	<div id="gest_con">
		<div><li><i class="fa fa-usd" style="font-size: 55px; text-align: center; color: white; margin-left: 32px; padding-top: 2px"></i></li></div>
		<div><p>Gestion Contable</p></div>
	</div>
	<div id="inventario">
		<div><li><i class="fa fa-check-square-o" style="font-size: 55px; text-align: center; color: white; margin-left: 30px;padding-bottom: 2px"></i></li></div>
		<div><p>Inventario</p></div>
	</div>
	<div id="informes">
		<div><li><i class="fa fa-pencil-square-o" style="font-size: 55px; text-align: center; color: white; margin-left: 30px;padding-bottom: 2px"></i></li></div>
		<div><p>Informes</p></div>
	</div>

	<div id="empresa">
		<div><li><i class="fa fa-industry" style="font-size: 55px; text-align: center; color: white; margin-left: 30px;padding-bottom: 2px"></i></li></div>
		<div><p>Gestionar Empresas</p></div>
	</div>
	<div id="usuarios">
		<div><li ><a href="Gestion_usuarios.php"><i class="fa fa-users " style="font-size: 55px; text-align: center; color: white; margin-left: 30px;padding-bottom: 2px"></i></a></li></div>
		<div><p>Gestion Usuario</p></div>
	</div>
	
</ul>


<?php
	}
?>