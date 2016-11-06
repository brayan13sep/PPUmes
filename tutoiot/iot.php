<?php
// iot.php
// Importamos la configuración
require "config.php";
// Leemos los valores que nos llegan por GET
$valor = mysqli_real_escape_string($con, $_GET['valor']);
$query = "INSERT INTO RFID (RFID) VALUES('" . $valor . "')";

// Esta es la instrucción para insertar los valores
// Ejecutamos la instrucción
mysqli_query($con, $query);
mysqli_close($con);
