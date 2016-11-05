<?php
  require '../DataBase/db.class.php';
    require '../DataBase/Conf.class.php';
    $db=Db::getInstance();
  $sede        = null;
  $tipo_reporte= null;
  $fecha_inicio= null;
  $fecha_fin   = null;
  
  function imprimir($sede, $tipo_reporte, $fecha_inicio, $fecha_fin)
  {
    if ($tipo_reporte== "No. Neonatos nacidos") {
      echo 
      '
            <legend>Modulo de consultas</legend>
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <tr>
                <td> Genero</td>
                <td> RFID TAG</td>
                <td> Peso</td>
                <td> Sede</td>
                <td> Fecha de nacimiento</td>
              </tr>
              
            </table> ';
      
    }
  }
  
  
  
  
   ?>