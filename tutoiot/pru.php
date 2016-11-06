

<?php
// iot.php
// Importamos la configuración
require "config.php";
// Leemos los valores que nos llegan por GET
$valor = mysqli_real_escape_string($con, $_GET['valor']);
//$query = 'INSERT INTO valores(valor) VALUES('" . $valor . "')';
$algo = $query = 'SELECT max(id) as id FROM valores';

echo ($algo);
echo ($valor);
// Esta es la instrucción para insertar los valores
// Ejecutamos la instrucción
mysqli_query($con, $query);
mysqli_close($con);

?>




<?php
// iot.php
// Importamos la configuración
require "config.php";
// Leemos los valores que nos llegan por GET
$valor = mysqli_real_escape_string($con, $_GET['valor']);
$query = "INSERT INTO valores(valor) VALUES('" . $valor . "')";

// Esta es la instrucción para insertar los valores
// Ejecutamos la instrucción
mysqli_query($con, $query);
mysqli_close($con);

?>
