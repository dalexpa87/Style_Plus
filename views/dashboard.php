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
	<link rel="stylesheet" type="text/css" href="recursos/css/jquery.dataTables.css">
    <link rel="stylesheet" href="recursos/plugins/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="recursos/plugins/materialize/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="recursos/plugins/sweetalert/dist/sweetalert.css">
	<title></title>
	
    

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" charset="utf8" src="recursos/plugins/datatable/jquery.dataTables.min.js"></script>

   

    <script type="text/javascript" src="recursos/plugins/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="recursos/plugins/sweetalert/dist/sweetalert.min.js"></script>

     <script>
    $(document).ready( function () {
          $('#datatable').DataTable({    
               "language": {               
               "url": "https://cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"       
                }   
    })
          $('.modal-trigger').leanModal();
      $('select').material_select();

      <?php

      if(isset($_GET["m"],$_GET["tm"])){
      	echo "swal({ title: 'STYLE +',   text: '".$_GET["m"]."',   type: '".$_GET["tm"]."'})";//Sweet Alert, falta cuadrar
      } 
      ?>
    });
    </script>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col l12 black" id="menu_up">
			<img src="recursos/img/logo_web.png">
				<a  id="ajustes" href="cerrarsesion.php">Cerrar Sesion<i class="fa fa-power-off" aria-hidden="true" style="margin-left: 10px; font-size: 25px; position: relative;"></i></a>
        <label id="ajustes" ><?php echo "Bienvenido ".($_SESSION["nombre"]);?></label>
		</div>
			<div class="col l1 black" id="menu_icono">
				<?php include_once("components/comp.menu.php"); ?>
			</div>
			<div class="col l8 center">
				<div class="row">
					<div class="col l12">
						<?php include_once("components/comp.pages.php") ?>
					</div>
				</div>
		</div>
	</div>
</div>	
</body>



</html>