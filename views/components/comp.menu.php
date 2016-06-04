<?php 

if($_SESSION["id_rol"]==1){//Menu de Usuario Público
?>

<ul>
	<div class = "icono"  id="historia">
		<div><li><i class="fa fa-check-square-o" style="font-size: 55px; text-align: center; color: white; margin-left: 30px;padding-bottom: 2px"></i></li></div>
		<div><p>Historia</p></div>
	</div>

	<div class = "icono" id="citas">
		<div><li><i class="fa fa-calendar-plus-o" style="font-size: 55px; text-align: center; color: white; margin-left: 30px;padding-bottom: 2px"></i></li></div>
		<div><p>Inventario</p></div>
	</div>
	<div class = "icono" id="ofertas">
		<div><li><i class="fa fa-tag" style="font-size: 55px; text-align: center; color: white; margin-left: 30px;padding-bottom: 2px"></i></li></div>
		<div><p>Ofertas</p></div>
	</div>
	
</ul>

<?php
}elseif($_SESSION["id_rol"]==2){//Menú Empleado
?>
<ul >
	<div class = "icono" id="gest_con">
		<div><li><i class="fa fa-usd" style="font-size: 55px; text-align: center; color: white; margin-left: 32px; padding-top: 2px"></i></li><p>Gestion Contable</p></div>
		
	</div>
	<div class = "icono" id="inventario">
		<div><li><i class="fa fa-check-square-o" style="font-size: 55px; text-align: center; color: white; margin-left: 30px;padding-bottom: 2px"></i></li></div>
		<div><p>Inventario</p></div>
		<ul id="desp_inv">
			<li>Proveedores</li>
			<li>Productos</li>
		</ul>
	</div>
	<div class = "icono" id="informes">
		<div><li><i class="fa fa-bar-chart" style="font-size: 55px; text-align: center; color: white; margin-left: 30px;padding-bottom: 2px"></i></li></div>
		<div><p>Informes</p></div>
	</div>

	<div class = "icono" id="citas">
		<div><li><i class="fa fa-calendar-plus-o" style="font-size: 55px; text-align: center; color: white; margin-left: 30px;padding-bottom: 2px"></i></li></div>
		<div><p>Inventario</p></div>
	</div>	
</ul>


<?php
}elseif($_SESSION["id_rol"]==3){//Menú Cliente Admin

?>

<ul  style="cursor: pointer;">
	<!--<div class= "icono" id="gest_con">
		<div><li><i class="fa fa-usd" style="font-size: 40px; text-align: center; color: white; margin-left: 17px"></i></li></div>
		<div><p>Gestion Contable</p></div>
	</div>-->

	<div class="icon">
	
		 <i class="fa fa-check-square-o dropdown-button "></i>
		
		 <p><a href="dashboard.php?p=<?php echo base64_encode('gestion_usuarios')?>">Gestion Usuarios</a></p>
		 
	</div>

	<div class="icon">
		 <i class="fa fa-check-square-o dropdown-button "  data-activates='dropdown1'></i>
		 <p>Inventario</p>
	</div>

	<div class= "icono" id="inventario">


		<div>
			<li>
				<i class="fa fa-check-square-o dropdown-button "  data-activates='dropdown1' style="font-size: 40px; text-align: center; margin-left: 17px; ">
					<p>Inventario</p></i>
			</li>
		</div>
		<div style="margin-left: 300px">
		<ul id='dropdown1' class='dropdown-content text-white black' >
		    <li><a href="dashboard.php?p=<?php echo base64_encode('gestion_proveedor')?>">Proveedor</a></li>
		    <li><a href="dashboard.php?p=<?php echo base64_encode('gestion_producto')?>">Producto</a></li>   
  		</ul>
  		</div>

		
	</div>
	<!--<div class= "icono" id="informes">
		<div><li><i class="fa fa-bar-chart" style="font-size: 40px; text-align: center; color: white; margin-left: 17px"></i></li></div>
		<div><p>Informes</p></div>
	</div>-->
	<div class= "icono" id="citas">
		<div>
			<li>
				<i class="fa fa-calendar-plus-o" style="font-size: 40px; text-align: center; color: white; margin-left: 17px"><p>Citas</p></i>
			</li>
		</div> 
	</div>
	<div class= "icono" id="ofertas">
		<div><li><i class="fa fa-tag" style="font-size: 40px; text-align: center; color: white; margin-left: 17px"></i></li></div>
		<div><p>Ofertas</p></div>
	</div>
	<div class="icono" style="font-size: 40px; text-align: center; color: white; margin-left: 17px">
	<a href="dashboard.php?p=<?php echo base64_encode('gestion_usuarios')?>" >
		<li ><i class="fa fa-users " style="font-size: 40px; text-align: center; color: white; margin-left: 17px;"></i></li>
		<p>Gestion Empleados




























		</p>
	</a>
	</div>
</ul>



<?php

	}elseif($_SESSION["id_rol"]==4){//Menú Administrador

?>
<ul id="menu_admin">

	
	<div class="icono" style="margin-top: 80px">
		<li><i class="fa fa-bar-chart" style="font-size: 40px; text-align: center; color: white; margin-left: 17px;"></i></li>
		<p>Informes</p>
	</div>

	<div class="icono" style="margin-top: 50px">
		<a href="dashboard.php?p=<?php echo base64_encode('gestion_empresa')?>" >
		<li><i class="fa fa-industry" style="font-size: 40px; text-align: center; color: white; margin-left: 17px;"></i></li>
		<div><p>Gestionar Empresas</p></div>
	</a>
	</div>
	<div class="icono" style="margin-top: 50px">
	<a href="dashboard.php?p=<?php echo base64_encode('gestion_usuarios')?>" >
		<li ><i class="fa fa-users " style="font-size: 40px; text-align: center; color: white; margin-left: 17px;"></i></li>
		<p>Gestion Usuario</p>
	</a>
	</div>
	
</ul>









<?php
	}
?>