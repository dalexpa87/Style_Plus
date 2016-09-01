<?php

  if(!isset($_SESSION["id_usuario"])){
    $msn = base64_encode("Debe iniciar sesion primero!");
    $tipo_msn = base64_encode("advertencia");


    header("Location: index.php?m=".$msn."&tm=".$tipo_msn);

 }
  require_once("../model/db_conn.php");
  require_once("../model/citas.class.php");

?>

<div class="container l5 m10 s12" id="tabla">
      <h4>CITAS</h4>


      <a class="waves-effect black btn" href='dashboard.php?p=<?php echo base64_encode('nueva_empresa')?>'> <i class="fa fa-user-plus"></i> Nueva Empresa</a>

      <table id="datatable" class="display">
        <thead>
          <tr>
            <th>Usuario</th>

            <th>Servicio</th>
            <th>Fecha Cita</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

        <?php
        $empleado = $_SESSION["id_usuario"];
        $citas= Gestion_citas::ReadByCita($empleado);


        foreach ($citas as $row) {

          echo "<tr>
                  <td>".$row[0].' '.$row[1]."</td>


                  <td>".$row[2]."</td>
                  <td>".$row[3]."</td>

                  <td>
                    <a href='ActualizarEmpresa.php?ui=".base64_encode($row["id_empresa"])."'><i class='fa fa-pencil'></i></a>
                    <a href='../controller/empresa.controller.php?ui=".base64_encode($row["id_empresa"])."&acc=d'><i class='fa fa-user-times' aria-hidden='true'></i></a>
                  </td>
                </tr>";
        }

        ?>
        </tbody>

      </table>


</div>
