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

    <title>Home</title>

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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  </head>

  <body>
<div class="container" style="margin-top:50px;">

      </div>



      </div>
  <div class="container">
    <div class="row">
        <div class="col-md-16">
            <div class="well well-sm">
                <form class="form-horizontal" method="POST" action="inserts/insert-mensaje.php" >
                    <fieldset>
                        <legend class="text-center header">Contacto</legend>

                        <div class="form-group">
                         <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon" style="font-size:36px" ></i></span>
                            <div class="col-md-8">
                                <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">
                            <i class="fa fa-user bigicon" style="font-size:36px" ></i></span>
                            <div class="col-md-8">
                                <input id="apellido" name="apellido" type="text" placeholder="Apellido " class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">
                            <i class="fa fa-envelope-o bigicon" style="font-size:36px"></i></span>
                            <div class="col-md-8">
                           <input id="email" name="email" type="email" placeholder=" Direccion de correo " class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">
                            <i class="fa fa-phone-square bigicon" style="font-size:36px"></i></span>
                            <div class="col-md-8">
                                <input id="telefono" name="telefono" type="text" placeholder="telefono " class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">
                            <i class="fa fa-pencil-square-o bigicon" style="font-size:36px"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="info" name="info" placeholder="Introduzca su mensaje para nosotros aquí. Nos pondremos en contacto lo mas pronto posible ." rows="7"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit"  value="Enviar este formulario"  class="btn btn-info "><i class="fa fa-check" aria-hidden="true"></i>  Enviar</button>
                                <button type="reset"  class="btn btn-danger"><i class="fa fa-refresh" aria-hidden="true"></i> Limpiar</button>
                                <button type="button" onclick=" location.href='index.html'" class="btn btn-primary"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../docs/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../docs/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../docs/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../docs/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>

</html>
