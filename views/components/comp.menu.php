<?php

if($_SESSION["id_rol"]==1){//Menu de Usuario Público

?>



<ul>

	<div class= "icon">
		<div>
			<li>
				<i class="fa fa-calendar-plus-o tooltipped data-delay="50" data-tooltip="Citas" data-position="right"">

				</i>
			</li>
		</div>
	</div>

	<div class= "icon">
		<div>
			<li>
				<i class="fa fa-shopping-cart tooltipped data-delay="50" data-tooltip="Ofertas" data-position="right"">

				</i>
			</li>
		</div>
	</div>



	<div class= "icon">
		<div>
			<li>
				<i class="fa fa-eye tooltipped data-delay="50" data-tooltip="Mi Historia" data-position="right"">

				</i>
			</li>
		</div>
	</div>

</ul>



<?php
}elseif($_SESSION["id_rol"]==2){//Menú Empleado
?>
<ul style="cursor: pointer;">

	<div class="icon">
		<div>
		<a href="dashboard.php?p=<?php echo base64_encode('gestion_citas')?>">
			<i class="fa fa-calendar-plus-o tooltipped data-delay="50" data-tooltip="Citas" data-position="right""></i>
		</a>
		</div>
	</div>


	<div class= "icon">
		<div>
			<li>
				<i class="fa fa-check-square-o dropdown-button tooltipped data-delay="50" data-tooltip="Inventario" data-position="right""  data-activates='dropdown1' ></i>
			</li>
		</div>
		<div >
		<ul id='dropdown1' class='dropdown-content text-white black' >
		    <li><a href="dashboard.php?p=<?php echo base64_encode('gestion_proveedor')?>">Proveedor</a></li>
		    <li><a href="dashboard.php?p=<?php echo base64_encode('gestion_producto')?>">Producto</a></li>
  		</ul>
  		</div>


	</div>

	<div class= "icon">
		<div>
			<li>
				<i class="fa fa-tag tooltipped data-delay="50" data-tooltip="Ofertas" data-position="right"" ></i>
			</li>
		</div>

	</div>

	<div class="icon" >
		<div>
		<a href="dashboard.php?p=<?php echo base64_encode('registro_usuario')?>">
			<i class="fa fa-user-plus tooltipped data-delay="50" data-tooltip="Registrar Usuario" data-position="right""></i>
		</a>
		</div>
	</div>
</ul>


<?php
}elseif($_SESSION["id_rol"]==3){//Menú Empresa

?>

<ul  style="cursor: pointer;">
	<!--<div class= "icono" id="gest_con">
		<div><li><i class="fa fa-usd" style="font-size: 40px; text-align: center; color: white; margin-left: 17px"></i></li></div>
		<div><p>Gestion Contable</p></div>
	</div>-->
	<div class= "icon">
		<div>
			<li>
				<i class="fa fa-check-square-o dropdown-button tooltipped data-delay="50" data-tooltip="Inventario" data-position="right""  data-activates='dropdown1' ></i>
			</li>
		</div>
		<div>
				<ul id='dropdown1' class='dropdown-content text-white black' >
		    <li><a href="dashboard.php?p=<?php echo base64_encode('gestion_proveedor')?>">Proveedor</a></li>
		    <li><a href="dashboard.php?p=<?php echo base64_encode('gestion_producto')?>">Producto</a></li>
  		</ul>
  		</div>
	</div>

	<div class="icon">
		<div>
			<li>
				<a href="dashboard.php?p=<?php echo base64_encode('gestion_citas')?>">
				<i class="fa fa-calendar-plus-o tooltipped data-delay="50" data-tooltip="Citas" data-position="right""></i>
				</a></li>
		</div>
	</div>



	<div class= "icon">
		<div>
			<li>
					<a href="dashboard.php?p=<?php echo base64_encode('gestion_servicios')?>">
				<i class="fa fa-paperclip tooltipped data-delay="50" data-tooltip="Gestionar Servicios" data-position="right"">
				</i>
			</li>
		</div>
	</div>

	<div class= "icon">
		<div>
			<li>
				<i class="fa fa-tag tooltipped data-delay="50" data-tooltip="Ofertas" data-position="right"" ></i>
			</li>
		</div>

	</div>

	<div class="icon" >
		<div>
		<a href="dashboard.php?p=<?php echo base64_encode('gestion_usuarios')?>">
			<i class="fa fa-users tooltipped data-delay="50" data-tooltip="Gestion Empleados" data-position="right""></i>
		</a>
		</div>
	</div>
</ul>



<?php

	}elseif($_SESSION["id_rol"]==4){//Menú Administrador

?>
<ul style="cursor: pointer;">


	<div class="icon">
		<i class="fa fa-bar-chart tooltipped data-delay="50" data-tooltip="Informes" data-position="right""></i>

	</div>

	<div class= "icon">
		<div>
			<li>
				<a href="dashboard.php?p=<?php echo base64_encode('gestion_empresa')?>" >
				<i class="fa fa-industry tooltipped data-delay="50" data-tooltip="Gestionar Empresas" data-position="right"">
				</i>
			</li>
		</div>
	</div>

	<div class= "icon">
		<div>
			<li>
					<a href="dashboard.php?p=<?php echo base64_encode('gestion_usuarios')?>" >
				<i class="fa fa-users tooltipped data-delay="50" data-tooltip="Gestionar Usuarios" data-position="right"">

				</i>
			</li>
		</div>
	</div>

</ul>


<?php
	}
?>
