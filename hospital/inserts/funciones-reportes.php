<?php
include '../DataBase/db.class.php';
include '../DataBase/Conf.class.php';



  
  function imprimir($sede, $tipo_reporte, $fecha_inicio, $fecha_fin)
  {

    $db = Db::getInstance();

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
              ';
              $sql  = 'SELECT N.genero genero, N.rfid rfid, N.peso peso, S.nombre nombre, N.fecha_nacimiento fecha FROM Neonato N, Sede S WHERE S.id=N.sede AND S.nombre="'.$sede.'" AND N.fecha_nacimiento BETWEEN "'.$fecha_inicio.'" AND '.$fecha_fin.' BY N.genero, N.rfid, N.peso, S.nombre, N.fecha_nacimiento';
              $stmt = $db->ejecutar($sql);

              while ($x = $db->obtener_fila($stmt,0)) {

              echo '<td>'.$x['genero'].'</td>
                    <td>'.$x['rfid'].'</td>
                    <td>'.$x['peso'].'</td>
                    <td>'.$x['fecha'].'</td>';
              }
            echo '</table> ';
      
    }
  }
  
  
  
  
   ?>
