<?php
require '../../DataBase/db.class.php';
require '../../DataBase/Conf.class.php';
$db = Db::getInstance();
$DPI                               = $_POST['DPI'];
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
$fechatimestamp=date('y/m/d H:i');
$sql                                = "
INSERT INTO madre (
 `dpi`, `rfid`, `tipo_documento`, `nombre`, `primer_apellido`, `segundo_apellido`, `fecha_de_nacimiento`, `edad`, `estado_civil`, `direccion`, `nivel_educativo`, `tipo_de_ocupacion`, `total_de_embarazos`, `hijos_actualmente_vivos`, `hijos_nacidos_vivos_que_fallecieron`, `abortos_o_nacidos_muertos`, `fecha_nacimiento_ultimo_hijo`, `activo`, `timestamp`
)
VALUES (
" . $DPI . "
,'" . $RFID . "'
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
,1
,'".$fechatimestamp."'
)";
$stmt = $db->ejecutar($sql);

/*
echo "" . $DPI . "
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
,1
,'".$fechatimestamp."'";
*/
//header('Location: ../madre.php');
