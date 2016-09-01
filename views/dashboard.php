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
	<title>Style+</title>



    <script type="text/javascript" src="recursos/plugins/jquery/jquery-1.12.1.min.js"></script>
    <script type="text/javascript" charset="utf8" src="recursos/plugins/datatable/jquery.dataTables.min.js"></script>



    <script type="text/javascript" src="recursos/plugins/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="recursos/plugins/sweetalert/dist/sweetalert.min.js"></script>

     <script>
    $(document).ready( function () {
          $('#datatable').DataTable({
               "language": {
               "url": "https://cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"

             },
             "iDisplayLength": 3
    })
          $('.modal-trigger').leanModal();
      $('select').material_select();
      $('.tooltipped').tooltip({delay: 50});
      $('.carousel.carousel-slider').carousel({full_width: true});

      <?php
      if(isset($_GET["m"],$_GET["tm"])){
        echo 'swal({title: "STYLE +", text: "'.base64_decode($_GET["m"]).'", type: "'.base64_decode($_GET["tm"]).'"})';
      }
      ?>


      //$("#mySelect").change(function(){
         //if($("#mySelect").val() == "3"){
            //$("#complemento").html("<div class='row'><div class='input-field col s12 m6 black-text'><?php $empresa//=Gestion_empresa::ReadAll(); ?><label class='white-text' >Seleccione una empresa</label><select name='id_empresa'><?php
                //foreach ($empresa as $emp){
                             // echo '
                             // <option value="'.$emp[0].'"><'.$emp[1].' </option> ';} ?>")};
                    //});

                  });
    </script>

</head>
<body background="recursos/img/fondo3.jpg " style="width=100% ; height=100%" >
<div class="container-fluid">
	<div class="row">
		<div class="col l12 black" id="menu_up">
			<img src="recursos/img/logo_web.png">
				<a  id="ajustes" href="cerrarsesion.php">Cerrar Sesion<i class="fa fa-power-off" aria-hidden="true" style="margin-left: 10px; font-size: 25px; position: relative;"></i></a>
        <label id="ajustes" ><?php echo "Bienvenido ".($_SESSION["nombre"])." ".($_SESSION["apellido"]);?></label>
		</div>
			<div class="col l1 black" id="menu_icono">
				<?php include_once("components/comp.menu.php"); ?>
			</div>
			<div class="col l8 center">
				<div class="row">
					<div class="col l12">
						<?php include_once("components/comp.pages.php");

            if ($_SESSION ["id_rol"]==1) {
              include_once("ofertas.php");

            }
            else{

              }?>
					</div>
				</div>
		</div>
	</div>
</div>

</body>



</html>
