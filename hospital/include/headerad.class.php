<?php

/**
 *
 */
class ClassName
{

    public function __construct()
    {
        # code...
    }
    public function FormsHeader($form)
    {

    }
}
include '../DataBase/session.php';
?>

 <div class="header clearfix">
      <nav>
        <ul class="nav nav-pills pull-right">
          <li role="presentation"><a href="administrador.php">Inicio</a></li>
          <li role="presentation" class="active"><a href="usuarios.php">Usuarios</a></li>
          <li role="presentation"><a href="">Nuevo</a></li>
           <li role="presentation"><a href="profecional.php">Nuevo Usuario</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Perfil <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../DataBase/logout.php">Cerrar Sesion</a></li>
              </ul>
          </li>
        </ul>
      </nav>
        <h3 class="text-muted">Hospital</h3>
    </div>
