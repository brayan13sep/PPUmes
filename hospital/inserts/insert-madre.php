<?php
require '../../DataBase/db.class.php';
require '../../DataBase/Conf.class.php';
$db = Db::getInstance();

$RFID                               = $_POST['RFID'];
$tipo_documento                     = $_POST['tipo_documento'];
$Nombre                             = $_POST['Nombre'];
$primer_apellido                    = $_POST['primer_apellido'];
$segundo_apellido                   = $_POST['segundo_apellido'];
$fecha_nacimiento                   = $_POST['fecha_nacimiento'];
$Edad                               = $_POST['Edad'];
$estado_civil                       = $_POST['estado_civil'];
$Direccion                          = $_POST['Direccion'];
$nivel_educativo                    = $_POST['nivel_educativo'];
$tipo_ocupacion                     = $_POST['tipo_ocupacion'];
$total_de_embarazos                 = $_POST['total_de_embarazos'];
$hijos_actualmente_vivos            = $_POST['hijos_actualmente_vivos'];
$hijos_nacidos_vivo_que_fallecieron = $_POST['hijos_nacidos_vivo_que_fallecieron'];
$abortos_o_nacidos_muertos          = $_POST['abortos_o_nacidos_muertos'];
$fecha_nacimiento_ultimo_hijo       = $_POST['fecha_nacimiento_ultimo_hijo'];
$sql                                = "INSERT INTO madre (
 DPI
,RFID
,tipo_documento
,Nombre
,primer_apellido
,segundo_apellido
,FechaDeNacimiento
,Edad
,estado_civil
,Direccion
,nivel_educativo
,TipoDeOcupacion
,total_de_embarazos
,hijos_actualmente_vivos
,HijosNacidosVivosQueFallecieron
,abortos_o_nacidos_muertos
,fecha_nacimiento_ultimo_hijo
)
VALUES (
" . $DPI . "
," . $RFID . "
," . $tipo_documento . "
,'" . $Nombre . "'
,'" . $primer_apellido . "'
,'" . $segundo_apellido . "'
,'" . $fecha_nacimiento . "'
," . $Edad . "
," . $estado_civil . "
,'" . $Direccion . "'
," . $nivel_educativo . "
,'" . $tipo_ocupacion . "'
," . $total_de_embarazos . "
," . $hijos_actualmente_vivos . "
," . $hijos_nacidos_vivo_que_fallecieron . "
," . $abortos_o_nacidos_muertos . "
,'" . $fecha_nacimiento_ultimo_hijo . "'
)";
$stmt = $db->ejecutar($sql);

echo $fecha_nacimiento;
//header('Location: ../neonato.php');
