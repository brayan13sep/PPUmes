<?php
require '../DataBase/db.class.php';
require '../DataBase/Conf.class.php';
require '../DataBase/session.php';

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

    <title>Altas</title>

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

      <div class="row">
  <div class="col-md-16 col-sm-6">
  <fieldset>
          <legend> Datos de la madre</legend>
   <table class="table table-bordered">
        <tr>
        <td bgcolor="#0D47A1"><label><font color="#FFFFF">RFID:</font></label></td>
        <td colspan="4"><input type="text" class="form-control" name="RFID" placeholder="RFID"></td>
      </tr>
      
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Numero DPI:</font></label></td>
              
              <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Nombres:</font></label></td>
             
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Primer Apellido:</font></label></td>
             </tr>
             <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Segundo Apellido:</font></label></td>
             
            </tr>
   </table>
         
        </fieldset></div>
  <div class="col-md-16 col-sm-6">
  <fieldset>
          <legend>Datos Neonato</legend>
      <table class="table table-bordered">
        <tr>
        <td bgcolor="#0D47A1"><label><font color="#FFFFF">RFID:</font></label></td>
        <td colspan="4"><input type="text" class="form-control" name="RFID" placeholder="RFID"></td>
        </tr>
     <td bgcolor="#0D47A1"><label><font color="#FFFFF">genero</font></label></td>
              
              <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">fecha y hora nacimiento </font></label></td>
             
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Peso:</font></label></td>
             </tr>
             <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">:</font></label></td>
             
            </tr>
   </table>
        </fieldset></div>


<div class="form-group" >
        <div class="col-md-4 "  >
         <div class="row">
          <fieldset>
          <legend>Datos Medico</legend>
      <table class="table table-bordered">
        <tr>
        <td bgcolor="#0D47A1"><label><font color="#FFFFF">Nombre</font></label></td>
         </tr>
     <td bgcolor="#0D47A1"><label><font color="#FFFFF">apellido</font></label></td>
              
              <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Numero colegiado</font></label></td>
             
            </tr>
           
          
   </table>
        </fieldset>
        

                            </div>
                        </div>
                        </div>
        
        

         <div class="form-group">
        <div class="col-md-12 text-center">
         <div class="row">
         <button type="button" onclick="Limpiar()" class="btn btn-danger">Limpiar <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
         <button type="button" class="btn btn-success">Imprimir<span class="glyphicon glyphicon-print" aria-hidden="true"></span></button>
          <button type="button" onclick=" location.href='home.php'" class="btn btn-primary"> Inicio  <span class="glyphicon glyphicon-home" aria-hidden="true"></span></button>

                            </div>
                        </div>
                        </div>


      
</div>
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