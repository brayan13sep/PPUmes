<?php
require '../DataBase/db.class.php';
require '../DataBase/Conf.class.php';
$db = Db::getInstance();

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // usuario and password sent from form

    $myusuario  = $_POST['usuario'];
    $mypassword = $_POST['password'];

    $sql = "
    SELECT  usuario.ID
    FROM  usuario WHERE usuario.usuario = '$myusuario' and usuario.password = '$mypassword'";
    $result = $db->ejecutar($sql);

    $count = mysql_num_rows($result);

    // If result matched $myusuario and $mypassword, table row must be 1 row

    if ($count == 1) {
        //session_register($myusuario);
        //session_register("myusuario");
        $_SESSION['login_user'] = $myusuario;
        if ($myusuario == "admin") {
            header("location: administrador.php");
        } else if ($myusuario == "enfermero") {
            header("location: admind.php");
        } else if ($myusuario == "director") {
            header("location: administrador.php");
        } else if ($myusuario == "dba") {
            header("location: consultasp.php");
        } else if ($myusuario == "monitoreo") {
            header("location: monitoreo.php");
        } else if ($myusuario == "medico") {
            header("location: home.php");
        }
    } else {
        $error = "Su usuario o contraseña no son validos por favor intentar de nuevo";
    }
}
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
    <link rel="icon" href="../../favicon.ico">

    <title>Login Hospital</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

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
<div class="container" style="margin-top:100px;"></div>
<div class="col-md-3" ></div>
  <div class="container">
    <div class="row">
        <div class="col-md-8" >

        <div id ="log"></div>
            <div class="well well-sm">
                <form class="form-horizontal" method="POST" action="">
                    <fieldset>
                        <legend class="text-center header"> <h2> Inicio De  Session </h2></legend>

                        <div class="form-group">
                         <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon" style="font-size:36px" ></i></span>
                            <div class="col-md-8">
                                <input id="inputUser" name="usuario" type="text" placeholder="Usuario" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">
                            <i  class="fa fa-key" style="font-size:36px" ></i></span>
                            <div class="col-md-8">
                                <input  type="password" name="password" id="inputPassword" placeholder="password " class="form-control" required>
                            </div>

                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">
                            <i   class="fa fa-lightbulb-o" style="font-size:36px" ></i></span>
                            <div class="col-md-8">
                                <input id="lname" type="checkbox" value="remember"> Recordarme
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="" class="btn btn-info "> <i class="fa fa-check" aria-hidden="true"></i>  Ingresar</button>
                                <button type="reset"  class="btn btn-danger"><i class="fa fa-refresh" aria-hidden="true"></i> Limpiar</button>
                                <button type="button" onclick=" location.href='index.html'" class="btn btn-primary"> <span class="glyphicon glyphicon-home" aria-hidden="true"> </span>  Inicio</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>


      </div>
<!--  <div class="container ">
  <center>
<div class="col-md-3" ></div>
<div class="col-md-6" >
<div class="panel panel-primary " >
  <div class="panel-heading">
    <h3 class="panel-title">Login</h3>
  </div>
  <div class="panel-body">
    <form class="form-signin" method="POST" action="">

        <h2 class="form-signin-heading">Iniciar sesion</h2>

        <div class="form-group">
         <div class="col-lg-16">

        <input type="text" name="usuario" id="inputUser" class="form-control" placeholder="Usuario" required autofocus>

        </div>
        </div>

        <div class="form-group">
        <div class="col-lg-16">
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        </div>
        </div>

        <div class="form-group">
        <div class="col-lg-16">
        <div class="checkbox">
        <label>
        <input type="checkbox" value="remember"> Recordarme
        </label>
        </div>
        </div>
        </div>

           <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
                </form>
                <div class="form-group">
               <div class="col-lg-3">
              <button class="btn btn-xl btn-link btn-block" onclick=" location.href='index.html'" type="submit">Regresar</button>
              </div>
             </div>

      </div>
  </div>

</div>

    </div> /container -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../docs/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../docs/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../docs/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../docs/assets/js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>
 <!--

-->
