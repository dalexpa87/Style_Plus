
  <?php
  /*
  session_start();
  require_once("../model/db_conn.php");
  require_once("../model/usuarios.class.php");

  if(!isset($_SESSION["id"])){
    $msn = base64_encode("Debe iniciar sesion primero!");
    $tipo_msn = base64_encode("advertencia");


    header("Location: index.php?m=".$msn."&tm=".$tipo_msn);
  }
  */
  require_once("../model/db_conn.php");
  require_once("../model/usuarios.class.php");
?>


<head>
	<title>Gestion de Usuarios</title><title>Gestion de Usuarios</title>
      <meta charset="utf-8">      
      <link type="text/css" rel="stylesheet" href="recursos\plugins\materialize\css\materialize.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" type="text/css" href="recursos\css\estilos_iniciosesion.css">
      <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
    <link rel="stylesheet" href="recursos/plugins/font-awesome/css/font-awesome.min.css">
    
     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>

     <script>
    $(document).ready( function () {
      $('#datatable').DataTable();
    });
    </script>       
</head>
  <body>
    <div class="container l5 m10 s12 ">
		    <h1>GESTIONAR USUARIOS</h1>

		    <a href="registrate.php" class="white"><h4><i class="fa fa-user-plus" aria-hidden="true"> Usuario Nuevo</i></h4></a>
		<!--
		    <select name="campox">
		      <option value="">Seleccione un usuario</option>
		      <?php
		      // $usuarios = Gestion_Usuarios::ReadAll();
		      //
		      // foreach ($usuarios as $row) {
		      //    echo "<option value='".$row[0]."'>".$row[4]."</option>";
		      // }

		      ?>
		    </select> -->


		    <table id="datatable" class="display">
		      <thead>
		        <tr>
		          <th>id</th>
		          <th>Tipo de Documento</th>
		          <th>Num. Documento</th>
		          <th>Nombres</th>
		          <th>Apellidos</th>
		          <th>Correo</th>
		          <th>Perfil</th>
		          <th>Estado</th>
		          <th>Acciones</th>
		        </tr>
		      </thead>
		      <tbody>

		      <?php
		      $usuarios= Gestion_Usuarios::ReadAll();

		      foreach ($usuarios as $row) {

		        if($row["id_rol"] == 1){
		          $perfil = "Usuario Publico";
		        }elseif($row["id_rol"] == 2){
		          $perfil = "Empleado";
		        }elseif($row["id_rol"] == 5){
		          $perfil = "Cliente Administrador";
		        }elseif($row["id_rol"] == 6){
		          $perfil = "Administrador";
		        }

		        echo "<tr>
		                <td>".$row["id_usuario"]."</td>
		                <td>".$row["tipo_documento"]."</td>
		                <td>".$row["numero_documento"]."</td>
		                <td>".$row["nombre"]."</td>
		                <td>".$row["apellido"]."</td>
		                <td>".$row["correo"]."</td>
		                <td>".$perfil."</td>
		                <td>".$row["estado"]."</td>
		                <td>

		                  <a href='ActualizarUsuario.php?ui=".base64_encode($row["id_usuario"])."'><i class='fa fa-pencil'></i></a>
		                  <a href='../controller/usuarios.controller.php?ui=".base64_encode($row["id_usuario"])."&acc=d'><i class='fa fa-user-times' aria-hidden='true'></i></a>


		                </td>
		              </tr>";
		      }

		      ?>
		      </tbody>
		
		    </table>
	</div>
	<?php
                  if( base64_decode(@$_GET["tm"]) == "advertencia"){
                    $estilos = "orange";
                  }else{
                    $estilos = "red";
                  }

                  echo "<div style='background-color:".$estilos."'>".base64_decode(@$_GET["m"])."</div>";?>
 </body>


	
</html>

