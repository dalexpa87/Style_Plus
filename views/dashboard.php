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
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
    <link rel="stylesheet" href="recursos/plugins/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="recursos\plugins\materialize\css\materialize.css"  >
	<title></title>
	
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>

     <script>
    $(document).ready( function () {
      $('#datatable').DataTable();
    });
    </script> 
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col l12 black">
			<img src="recursos/img/logo_web.png">
		</div>
			<div class="col l1 black">
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