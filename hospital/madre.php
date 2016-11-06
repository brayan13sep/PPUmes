<!DOCTYPE html>
<?php
require '../DataBase/db.class.php';
require '../DataBase/Conf.class.php';
include '../DataBase/session.php';
$db = Db::getInstance();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Madre</title>

    <!-- Bootstrap core CSS -->
    <link href="../docs/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../docs/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
    <link href="../js/jquery-ui/jquery-ui.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../docs/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <?php require 'include/header.class.php';?>
      <div class="well well-lg">

      <form method="POST" action="inserts/insert-madre.php" id="formulario">

        <fieldset>
          <legend> Datos de la Madre</legend>
          <table class="table table-bordered">
            <tr>
<<<<<<< HEAD
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Tipo de documento:</font></font></label></td>
              <td><select name="tipo_documento"  id="tipo_documento" class="form-control"><option>Seleccione</option>
              <option  value="1">Dpi</option><option value="2">cedula</option><option value="3">pasaporte</option>

=======
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Tipo de Documento:</font></font></label></td>
              <td><select name="tipo_documento" class="form-control"><option>Seleccione</option>
                <?php
$sql  = 'SELECT ID,descripcion FROM tipo_documento';
$stmt = $db->ejecutar($sql);
while ($x = $db->obtener_fila($stmt, 0)) {
    echo '<option value="' . $x['ID'] . '">' . $x['descripcion'] . '</option>';
}
?>
>>>>>>> f1effe57665b948b18bbc2c2b3c56101d59da075
                  </select></td>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Número:</font></label></td>
              <td colspan="2"><input type="text" class="form-control" name="DPI" placeholder="Número"></td>
            </tr>
             <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Nombres:</font></label></td>
              <td colspan="4"><input type="text" class="form-control" name="Nombre" placeholder="Nombres"></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Primer Apellido:</font></label></td>
              <td colspan="4"><input type="text" class="form-control" name="primer_apellido" placeholder="Primer Apellido"></td>
            </tr>
             <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Segundo Apellido:</font></label></td>
              <td colspan="4"><input type="text" class="form-control" name="segundo_apellido" placeholder="Segundo Apellido"></td>
            </tr>
            <tr>
<<<<<<< HEAD
             <td bgcolor="#0D47A1"><label><font color="#FFFFF">RFID:</font></label></td>
             <td colspan="4"><?php
$sql  = 'SELECT * FROM `valores` ORDER BY id DESC LIMIT 1';
$stmt = $db->ejecutar($sql);
while ($x = $db->obtener_fila($stmt, 0)) {
    echo '<input class="form-control" type="text" name="rfid" value="' . $x['valor'] . '" readonly="readonly" />'

    ;}

?></td>
           </tr>


            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Fecha de nacimiento:</font></label></td>
              <td colspan="3"><input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="yyyy/mm/dd"></td>
=======
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">RFID:</font></label></td>
              <td colspan="4"><select  name="RFID"><?php 
              $sql  = 'SELECT MAX(ID) ID ,RFID FROM RFID';
$stmt = $db->ejecutar($sql);
while ($x = $db->obtener_fila($stmt, 0)) {
    echo '<option value="' . $x['id'] . '">' . $x['RFID'] . '</option>';
}
               ?></select></td>
            </tr>


            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Fecha de Nacimiento:</font></label></td>
              <td colspan="3"><input type="text" class="form-control" name="fecha_nacimiento" id="datepicker" placeholder="yyyy/mm/dd"></td>
>>>>>>> f1effe57665b948b18bbc2c2b3c56101d59da075
              <td colspan="2"><input type="text" class="form-control" name="Edad" placeholder="Edad"></td>

            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Estado Civil:</font></label></td>
              <td colspan="5"><select name="estado_civil" class="form-control"><option>Seleccione</option>
              <?php
$sql  = 'SELECT ID,descripcion FROM estado_civil';
$stmt = $db->ejecutar($sql);
while ($x = $db->obtener_fila($stmt, 0)) {
    echo '<option value="' . $x['ID'] . '">' . $x['descripcion'] . '</option>';
}
?>

              </select></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Dirección:</font></label></td>
              <td colspan="5"><textarea type="text" row="5" name="Direccion" class="form-control" placeholder="Dirección"></textarea> </td>
            </tr>
          </table>
        </fieldset>
        <fieldset>
          <legend>Datos Adicionales de la Madre</legend>
          <table class="table table-bordered">
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Nivel Académico:</font></font></label></td>
              <td colspan="3"><select name="nivel_educativo" class="form-control"><option>Seleccione</option>
                <?php
$sql  = 'SELECT ID,descripcion FROM nivel_educativo';
$stmt = $db->ejecutar($sql);
while ($x = $db->obtener_fila($stmt, 0)) {
    echo '<option value="' . $x['ID'] . '">' . $x['descripcion'] . '</option>';
}
?>

              </select></td>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Total de Embarazos:</font></label></td>
              <td ><input type="text" name="total_de_embarazos" class="form-control" placeholder="Número"></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Ocupación:</font></font></label></td>
              <td colspan="5"><input type="text" name="tipo_ocupacion" class="form-control" placeholder="Ocupación"></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Hijos Actualmente Vivos:</font></font></label></td>
              <td><input type="text" name="hijos_actualmente_vivos" class="form-control" placeholder="Cantidad"></td>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Hijos Fallecidos:</font></font></label></td>
              <td><input type="text" name="hijos_nacidos_vivo_que_fallecieron" class="form-control" placeholder="Cantidad"></td>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Abortos y Nacidos Fallecidos:</font></font></label></td>
              <td><input type="text" name="abortos_o_nacidos_muertos" class="form-control" placeholder="Cantidad"></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Fecha de Nacimiento Último Hijo:</font></label></td>
              <td colspan="2"><input type="text" class="form-control" name="fecha_nacimiento_ultimo_hijo" id="datepicker2" placeholder="mm/dd/yyyy"></td>
              <td colspan="3"></td>
            </tr>
          </table>
        </fieldset>

  <div class="form-group">
           <div class="col-md-12 text-center">
<div class="row">

          <button type="button" onclick="Limpiar()" class="btn btn-danger">Limpiar <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
           <button type="submit" class="btn btn-success">Guardar <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span></button>
          <button type="button" onclick=" location.href='home.php'" class="btn btn-primary"> Inicio  <span class="glyphicon glyphicon-home" aria-hidden="true"></span></button>

                            </div>
                        </div>
                        </div>


      </form>

</div>
    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../docs/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../docs/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../docs/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../docs/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="../js/jquery-ui/jquery-ui.min.js"></script>
    <script src="../js/jquery-ui/jquery-ui.js"></script>
    <script src="../js/jaquery-ui/external/jquery/jquery.js"></script>
    <script>
      $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  } );
       $( function() {
    $( "#datepicker2" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  } );
    </script>
    <script>
      function Limpiar() {
        document.getElementById("formulario").reset();
      }
</script>
  </body>
</html>