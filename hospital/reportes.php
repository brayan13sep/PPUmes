<?php
include 'inserts/funciones-reportes.php';
include '../DataBase/session.php';
include '../DataBase/session.php';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Reportes</title>

    <!-- Bootstrap core CSS -->
    <link href="../docs/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="../js/jquery-ui/jquery-ui.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../docs/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">

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
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Perfil <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="../DataBase/logout.php">Cerrar Sesión</a></li>
                 </ul>
              </li>
          </ul>
        </nav>
        <h3 class="text-muted">Hospital</h3>
      </div>
      <div class="well well-lg">

      <form method="POST" action="">
        <fieldset>
          <legend>Modulo Reportes</legend>
          <table class="table table-bordered">
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Sede:</font></label></td>
              <td colspan="1"><select name="sede" class="form-control"><option>Seleccione</option><option value="Hospital de Amatitlan">Hospital de Amatitlan</option></select></td>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Tipo de Reporte:</font></label></td>
              <td colspan="1"><select name="tipo_reporte" class="form-control"><option>Seleccione</option><option name="No. Neonatos nacidos">No. Neonatos nacidos</option><option name="enfermedades_registradas">Enfermedades Registradas</option><option name="Edad de madres">Edad de madres</option></select></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Fecha Inicio:</font></label></td>
              <td><input type="text" class="form-control" name="fecha_inicio" id="datepicker" placeholder="yyyy/mm/dd"></td>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Fecha Fin:</font></label></td>
              <td><input type="text" class="form-control" name="fecha_fin" id="datepicker2" placeholder="yyyy/mm/dd"></td>
            </tr>
          </table>
        </fieldset>
 <div class="form-group">
           <div class="col-md-12 text-center">
                <div class="row">

 <button type="button" class="btn btn-danger">Limpiar <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
          <button type="submit" class="btn btn-success">Generar Reporte <span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                            </div>
                        </div>
                        </div>
      </form>

</div>
<div class="well well-lg">

      <?php
      if(isset($_POST['sede'])){ $sede= $_POST['sede'];} 
      if(isset($_POST['tipo_reporte'])){ $tipo_reporte = $_POST['tipo_reporte'];} 
      if(isset($_POST['fecha_inicio'])){ $fecha_inicio = $_POST['fecha_inicio'];} 
      if(isset($_POST['fecha_fin'])){ $fecha_fin = $_POST['fecha_fin'];} 
//$sede         = $_POST['sede'];
//$tipo_reporte = $_POST['tipo_reporte'];
//$fecha_inicio = $_POST['fecha_inicio'];
//$fecha_fin    = $_POST['fecha_fin'];

imprimir($sede, $tipo_reporte, $fecha_inicio, $fecha_fin);
?>

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