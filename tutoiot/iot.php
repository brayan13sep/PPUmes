<?php
// iot.php
// Importamos la configuración
require "config.php";
// Leemos los valores que nos llegan por GET
$fechatimestamp=date('y/m/d H:i');
$valor = mysqli_real_escape_string($con, $_GET['valor']);
$query = "INSERT INTO valores (valor, tiempo) VALUES('" . $valor . "',".$fechatimestamp.")";

// Esta es la instrucción para insertar los valores
// Ejecutamos la instrucción
mysqli_query($con, $query);
mysqli_close($con);
