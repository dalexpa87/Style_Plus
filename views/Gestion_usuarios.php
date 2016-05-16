
  <?php

  if(!isset($_SESSION["id_usuario"])){
    $msn = base64_encode("Debe iniciar sesion primero!");
    $tipo_msn = base64_encode("advertencia");


    header("Location: index.php?m=".$msn."&tm=".$tipo_msn);

 } 
  require_once("../model/db_conn.php");
  require_once("../model/usuarios.class.php");
  
?>
	<div class="container l5 m10 s12" id="tabla">
		    <h4>GESTIONAR USUARIOS</h4>
		    

		    
		    <a class="waves-effect black btn modal-trigger"href="#modal-nuevo_usuario"> <i class="fa fa-user-plus" style="margin-left: 2px"></i> Nuevo Usuario</a>

		  
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
		        }elseif($row["id_rol"] == 3){
		          $perfil = "Cliente Administrador";
		        }elseif($row["id_rol"] == 4){
		          $perfil = "Administrador";
		        }

		        echo "<tr>
		                <td>".$row["id_usuario"]."</td>
		                <td>".$row["tipo_documento"]."</td>
		                <td>".$row["numero_documento"]."</td>
		                <td>".$row["nombre"]."</td>
		                <td>".$row["apellido"]."</td>
		                <td>".$row["correo"]."</td>
		                <td>".$row["id_rol"]."</td>
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
		    <div id="modal-nuevo_usuario" class="modal modal-fixed-footer">
            <div class="modal-content">
            	<?php include("nuevo_usuario.php"); ?>
            </div>
            </div>
	</div>
	<?php
                  if( base64_decode(@$_GET["tm"]) == "advertencia"){
                    $estilos = "orange";
                  }else{
                    $estilos = "red";
                  }

                  echo "<div style='background-color:".$estilos."'>".base64_decode(@$_GET["m"])."</div>";?>


