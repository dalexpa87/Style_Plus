
<?php
  session_start();

   require_once("../model/db_conn.php");
   require_once("../model/servicios.class.php");
?>

    <div class="container l5 m10 s12 " id="tabla">
        <h4>GESTIONAR SERVICIOS</h4>


        <a class="waves-effect black btn " href='dashboard.php?p=<?php echo base64_encode('nuevo_servicio')?>'> <i class="fa shopping-basket"></i> Nuevo Servicio</a>


        <table id="datatable" class="display">
          <thead>
            <tr>
               <th>Codigo</th>
              <th>Nombre</th>
              <th>Descripcion</th>
              <th>Duracion</th>
              <th>Valor Servicio</th>
              <th>iva</th>
              <th>Descuento</th>
              <th>Acciones </th>
            </tr>
          </thead>
          <tbody>

          <?php
          $id_empresa= $_SESSION["id_empresa"];
          $servicios=Gestion_Servicios::Readbyempresa($id_empresa);


          foreach ($servicios as $row) {


           echo "<tr>
                    <td>".$row["codigo"]."</td>
                    <td>".$row["nombre"]."</td>
                    <td>".$row["descripcion"]."</td>
                    <td>".$row["duracion"]."</td>
                    <td>".$row["valor_venta"]."</td>
                    <td>".$row["iva"]."</td>
                    <td>".$row["descuento"]."</td>
                    <td>


                      <a href='dashboard.php?p=".base64_encode('actualizar_servicio')."&ui=".base64_encode($row['id_servicio'])."'><i class='fa fa-pencil'></i></a>


                    </td>
                  </tr>";
          }

          ?>
          </tbody>

        </table>
  </div>

</body>
</html>
