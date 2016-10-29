<?php

require '../DataBase/db.class.php';
require '../DataBase/Conf.class.php';
$db = Db::getInstance();
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

    <title>Consulta de certificado</title>

    <!-- Bootstrap core CSS -->
    <link href="../docs/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

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
            <li role="presentation" class="active"><a href="/home.php">Inicio</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Perfil <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="#">Cerrar Sesion</a></li>
                 </ul>
              </li>
          </ul>
        </nav>
        <h3 class="text-muted">Hospital</h3>
      </div>
     <div class="well well-lg">



      <form>
        <fieldset>
          <legend>Modulo de consultas</legend>
          <table class="table table-bordered">
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Sede:</font></label></td>
              <td colspan="3"><select class="form-control"><option>seleccione</option><option>Hospital de Amatitlan</option><option>Hospital de Escuintla</option></select></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Fecha inicio:</font></label></td>
              <td><select class="form-control"><option>Dia</option></select></td>
              <td><select class="form-control"><option>Mes</option></select></td>
              <td><select class="form-control"><option>Año</option></select></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Fecha fin:</font></label></td>
              <td><select class="form-control"><option>Dia</option></select></td>
              <td><select class="form-control"><option>Mes</option></select></td>
              <td><select class="form-control"><option>Año</option></select></td>
            </tr>
          </table>
        </fieldset>
          <div class="form-group">
           <div class="col-md-12 text-center">
            <button type="button" onclick=" location.href='home.php'" class="btn btn-primary">Inicio <span class="glyphicon glyphicon-home" aria-hidden="true"></span></button>
          <button type="button" class="btn btn-danger">Limpiar <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
          <button type="button" class="btn btn-success">Generar Reporte <span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
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
  </body>
</html>
