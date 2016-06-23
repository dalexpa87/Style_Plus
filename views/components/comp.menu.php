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
			<i class="fa fa-user-plus" tooltipped data-delay="50" data-tooltip="Registrar Usuario" data-position="right"></i>
		</a>
		</div>
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
				<i class="fa fa-calendar-plus-o tooltipped data-delay="50" data-tooltip="Citas" data-position="right"">
					
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
<ul id="menu_admin">

	
	<div class="icon">
		<li><i class="fa fa-bar-chart"></i></li>
		<p>Informes</p>
	</div>

	<div class="icon">
		<div>
			<a href="dashboard.php?p=<?php echo base64_encode('gestion_empresa')?>" >
				<i class="fa fa-industry tooltipped data-delay="50" data-tooltip="Gestion Empresas" data-position="right""></i>
			</a>
		</div>
	</div>

	<div class="icon">
		<div>
			<a href="dashboard.php?p=<?php echo base64_encode('gestion_usuarios')?>" >
				<li ><i class="fa fa-users tooltipped data-delay="50" data-tooltip="Gestion Usuarios" data-position="right" "></i></li>
			
			</a>
		</div>
	</div>
	
</ul>









<?php
	}
?>