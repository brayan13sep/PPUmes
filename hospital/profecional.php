<!DOCTYPE html>
<?php 
  require '../DataBase/db.class.php';
  require '../DataBase/Conf.class.php';
  $db=Db::getInstance();
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

    <title>Profecional</title>

    <!-- Bootstrap core CSS -->
    <link href="../docs/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../docs/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
    <link rel="stylesheet" href="../dist/css/bootstrap-multiselect.css" type="text/css"/>

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
      <?php require 'include/header.class.php'; ?>
      <form method="POST" action="inserts/insert-profecional.php" id="formulario">
        <fieldset>
          <legend> Datos del profecional que certifica el nacimiento</legend>
          <table class="table table-bordered">
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Profecion:</font></font></label></td>
              <td colspan="3"><select name="Profesion" id="select" class="form-control"><option value="obstetra">obstetra</option><option value="medigo general">Medico general</option><option value="otros">Otros</option></select></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">No. colegiatura:</font></label></td>
              <td colspan="3"><input name="no_colegiatura" type="text" class="form-control" placeholder="No. colegiatura"></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Tipo de documento:</font></label></td>
              <td><select name="tipo_documento" class="form-control"><option>Seleccione</option>
                <?php
                  $sql='SELECT id,descripcion FROM tipodocumento'; 
                  $stmt=$db->ejecutar($sql); 
                  while ($x=$db->obtener_fila($stmt,0)){
                    echo '<option value="'.$x['id'].'">'.$x['descripcion'].'</option>';
                  } 
                  ?>
              </select></td>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Numero:</font></label></td>
              <td ><input name="DPI" type="text" class="form-control" placeholder="Numero"></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Primer Apellido:</font></label></td>
              <td colspan="3"><input name="primer_apellido" type="text" class="form-control" placeholder="Primer Apellido"></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Segundo Apellido:</font></label></td>
              <td colspan="3"><input name="segundo_apellido" type="text" class="form-control" placeholder="Segundo Apellido"></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Nombres:</font></label></td>
              <td colspan="3"><input name="Nombre" type="text" class="form-control" placeholder="Nombres"></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Genero:</font></label></td>
              <td colspan="3"><select name="Genero" class="form-control"><option>seleccione</option><option>Masculino</option><option>Femenino</option></select></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Sede:</font></label></td>
              <td colspan="3"><select name="Sede" class="form-control"><option>seleccione</option>
                <?php
                  $sql='SELECT id,nombre FROM sede'; 
                  $stmt=$db->ejecutar($sql); 
                  while ($x=$db->obtener_fila($stmt,0)){
                    echo '<option value="'.$x['id'].'">'.$x['nombre'].'</option>';
                  } 
                  ?>
              </select></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">El que certifica declara:</font></label></td>
              <td colspan="3"><select name="certifica_declara" class="form-control"><option>seleccione</option><option>prueba</option></select></td>
            </tr>
          </table>
        </fieldset>
        <div class="row">
          <button type="button"  onclick="Limpiar()" class="btn btn-danger">Limpiar <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
          <button type="button" onclick=" location.href='neonato.php'" class="btn btn-primary">Atras <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></button>
          <button type="submit" class="btn btn-success">Guardar <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span></button>
      </div>

      
      </form>

    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../docs/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../docs/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../docs/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../docs/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="../js/jquery-ui/jquery-ui.js"></script>
    <script src="../js/jaquery-ui/external/jquery/jquery.js"></script>
    <script src="../js/bootstrap-multiselect.js"></script>
    <script>
      function Limpiar() {
        document.getElementById("formulario").reset();
      }
</script>
  </body>
</html>
