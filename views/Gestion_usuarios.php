
  <?php
  
 
  require_once("../model/db_conn.php");
  require_once("../model/usuarios.class.php");

  if(!isset($_SESSION["id_usuario"])){
    $msn = base64_encode("Debe iniciar sesion primero!");
    $tipo_msn = base64_encode("advertencia");


    header("Location: index.php?m=".$msn."&tm=".$tipo_msn);
  }
  
?>
	<div class="container l5 m10 s12" id="tabla">
		    <h1>GESTIONAR USUARIOS</h1>
		    <button type="button">
		    	 <a href="registrate.php" class="white"><i class="fa fa-user-plus" aria-hidden="true"> Usuario Nuevo</i></a>
		    </button>
		   
		    
			

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


