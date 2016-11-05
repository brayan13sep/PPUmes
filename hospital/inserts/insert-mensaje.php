<?php
require '../../DataBase/db.class.php';
require '../../DataBase/Conf.class.php';
$db = Db::getInstance();

$nombre   = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email    = $_POST['email'];
$telefono = $_POST['telefono'];
$info     = $_POST['info'];

try {

    $sql = " INSERT INTO mensaje (nombre,apellido,email,telefono,info)
VALUES (
'" . $nombre . "'
,'" . $apellido . "'
,'" . $email . "'
,'" . $telefono . "'
,'" . $info . "'
)";

    $stmt = $db->ejecutar($sql);

    header('Location: ../index.html');

} catch (Exception $e) {

}
