<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="recursos/plugins/materialize/css/materialize.css">
	<title>Empresa_Form</title>
</head>
<body>
<div class="container">
	<h1 class="center">Crear empresa</h1>
	
	<div class="row">
		<div class="col s12">
		<form class="col s12 center" action="../controller/empresa.controller.php" method="POST">
			<div class="row">
				<div class="input-field col s6 l5 m3 black-text">
	            <label>Nombre Empresa</label>
	            <br></br>
	            <input required type="text" name="razon_social" class="validate"></div>

	            <div class="input-field col s6 l5 m5 black-text">
            	<label>Nit</label>
	            <br></br>
	            <input required type="number" name="nit" class="validate"></div>

	            <div class="input-field col s6 l5 m5 black-text">
            	<label>Telefono</label>
            	<br></br>
            	<input required type="text" name="telefono" class="validate"></div>
			</div>
			<div class="row">
            	<div class="input-field col s6 l5 m5 black-text">
            	<label>Direccion</label>
            	<br></br>
            	<input required type="text" name="direccion" class="validate"></div>

            	<div class="input-field col s10 l5 m5 black-text">
            	<label>Correo Electronico</label>
            	<br></br>
            	<input required type="email" name="correo" class="validate"></div>

            	<div class="input-field col s10 l5 m5 black-text">
            	<label>Actividades de la Empresa</label>
            	<br></br>
            	<input required type="text" name="descripcion" class="validate"></div>
			</div>
			</div>
			<input type="hidden" name="id_usuario" value="1"></div>
			<input type="hidden" name="autor" value="David"></div>

			
		
	</div>

			<button name="acc" value="c" class="waves-effect black btn"> Enviar</button>
         	<button class="waves-effect black btn"><a href="iniciosesion.php">Cancelar</a></button>

		</form>
	</div>
</div>	
	<script type="text/javascript" src="jquery-1.12.1.min.js"></script>
 	<script type="text/javascript" src="materialize\js\materialize.min.js"></script>
</body>


</html>