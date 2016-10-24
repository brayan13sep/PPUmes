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
    <link href="../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="../docs/examples/carousel/carousel.css" rel="stylesheet">
  </head>

  <body>

 <div class="container ">
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
              <button class="btn btn-xl btn-link btn-block" onclick=" location.href='{{ url('/hospital/public') }}'" type="submit">Regresar</button>
              </div>
             </div>
                
      </div>
  </div>

</div>

    </div> <!-- /container -->

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