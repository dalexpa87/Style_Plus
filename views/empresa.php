
<div class="container">
	<h1 class="center">Crear empresa</h1>
	
	<div class="row">
		<div class="col s12">
		<form class="col s12 center" action="../controller/empresa.controller.php" method="POST">
			<div class="row">
				<div class="input-field col s12 m6 black-text">
	            <label>Nombre Empresa</label>
	            
	            <input required type="text" name="razon_social" class="validate"></div>

	            <div class="input-field col s12 m6 black-text">
            	<label>Nit</label>
	            
	            <input required type="number" name="nit" class="validate"></div>

	            <div class="input-field col s12 m6 black-text">
            	<label>Telefono</label>
            	
            	<input required type="number" name="telefono" class="validate"></div>
			</div>
			<div class="row">
            	
            	<div class="input-field col s6 l5 m5 black-text">
            	<label>Direccion</label>
            	<input required type="text" name="direccion" class="validate"></div>

            	<div class="input-field col s12 l5 m5 black-text">
            	<label>Correo Electronico</label>
            	
            	<input required type="email" name="correo" class="validate"></div>

            	<div class="input-field col s12 l5 m5 black-text">
            	<label>Actividades de la Empresa</label>
            	
            	<input required type="text" name="descripcion" class="validate"></div>
			</div>
			</div>
			
			<input type="hidden" name="autor" value="David"></div>

			
		
	
			<div class="col s12 center">
			<button name="acc" value="c" class="waves-effect black btn" <a href="dashboard.php?p=<?php echo base64_encode('gestion_empresa')?>"> Enviar</button>
         	<button class="waves-effect black btn"><a href="dashboard.php?p=<?php echo base64_encode('gestion_empresa')?>">Cancelar</a></button>
         	</div>
		</form>
	</div>
</div>	
	<script type="text/javascript" src="jquery-1.12.1.min.js"></script>
 	<script type="text/javascript" src="materialize\js\materialize.min.js"></script>
