
  <?php

  if(!isset($_SESSION["id_usuario"])){
   $msn = base64_encode("Debe iniciar sesion primero!");
   $tipo_msn = base64_encode("advertencia");


    ("Location: index.php?m=".$msn."&tm=".$tipo_msn);

 }
  require_once("../model/db_conn.php");
  require_once("../model/usuarios.class.php");

  $perfilinic=$_SESSION["id_rol"];
    if ($perfilinic==4){

		      $usuarios= Gestion_Usuarios::ReadAll();
		      $titulo= "GESTIONAR USUARIOS";
          $titulo_btn = "Nuevo Usuario";
        }else{
		      $usuarios= Gestion_Usuarios::Readbyempresa($_SESSION["id_empresa"]);
		      $titulo= "GESTIONAR EMPLEADO";
          $titulo_btn = "Nuevo Empleado";
        }

?>
	 <div class="container l5 m10 s12" id="tabla">
		    <h4><?php echo $titulo ?></h4>

          <a class="waves-effect black btn" href='dashboard.php?p=<?php echo base64_encode('nuevo_usuario')?>'><i class='fa fa-pencil'></i><?php echo $titulo_btn ?></a>


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

		      foreach ($usuarios as $row) {

		        if($row["id_rol"] == 1){
		          $perfil = "Usuario Publico";
		        }elseif($row["estado"] == 0){
		          $estado = "inactivo";
		        }elseif($row["id_rol"] == 2){
		          $perfil = "Empleado";
		        }elseif($row["id_rol"] == 3){
		          $perfil = "Cliente Administrador";
		        }elseif($row["id_rol"] == 4){
		          $perfil = "Administrador";
		        }

		        if($row["estado"] == 1){
		          $estado = "Activo";
		        }elseif($row["estado"] == 0){
		          $estado = "inactivo";   }

		        echo "<tr>
		                <td>".$row["id_usuario"]."</td>
		                <td>".$row["tipo_documento"]."</td>
		                <td>".$row["numero_documento"]."</td>
		                <td>".$row["nombre"]."</td>
		                <td>".$row["apellido"]."</td>
		                <td>".$row["correo"]."</td>
		                <td>$perfil</td>
		                <td>$estado</td>
		                <td>

		                  <a href='dashboard.php?p=".base64_encode('actualizar_usuario')."&ui=".base64_encode($row['id_usuario'])."'><i class='fa fa-pencil'></i></a>
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
