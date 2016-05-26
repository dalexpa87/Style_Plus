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

  
      $("#mySelect").change(function(){
          if($("#mySelect").val() == "3"){
            $("#complemento").html("<?php for ($i=0; $i < 10; $i++) {
                  echo $i;
                }; ?>");
          }
      });
 
    });