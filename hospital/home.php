<!DOCTYPE html>
<?php
require '../DataBase/db.class.php';
require '../DataBase/Conf.class.php';

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

    <title>Principal</title>

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
      <?php require 'include/headerdoc.class.php';?>

        <fieldset>

    <div class="container">

        <fieldset>
         <div class="container">
     <div class="well well-lg">

      <div class="page-header">
        <h1>Modulo Ingreso</h1>
        <p>
          <a href="madre.php" class="btn btn-primary"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Registrar Certificado</a>
             </p>
      </div>
       <div class="page-header">
        <h1>Modulo Altas</h1>
        <p>
          <a href="altas.php" class="btn btn-primary"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Registrar Alta</a>

        </p>
      </div>
      <div class="page-header">
        <h1>Modulo Consultas</h1>
        <p>
          <a href="consulta-de-certificado.php" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Consultas de Certificado</a>
        </p>
      </div>
      <div class="page-header">
        <h1>Modulo Reportes</h1>
        <p>
          <a href="reportes.php" class="btn btn-primary"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Reporte de Certificados</a>
        </p>
      </div>
    </div> <!-- /container -->


    </div> <!-- /container -->

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
