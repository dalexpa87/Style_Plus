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
	
</ul>


<?php
}elseif($_SESSION["id_rol"]==3){//1 Usuario Publico, 2 Empleado, 3 Cliente Admin, 4 Administador

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

	}elseif($_SESSION["id_rol"]==4){

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
	
</ul>


<?php
	}
?>