<?php 
require '../../DataBase/db.class.php';
require '../../DataBase/Conf.class.php';
$db=Db::getInstance();

//$RFID=$_POST['RFID'];
$RFID=0;
$Genero=$_POST['Genero'];
$Peso=$_POST['Peso'];
$Talla=$_POST['Talla'];
$perimetro_cefalico=$_POST['perimetro_cefalico'];
$perimetro_toracico=$_POST['perimetro_toracico'];
$hora_de_nacimiento=$_POST['hora_de_nacimiento'];
$fecha_nacimiento=$_POST['FechaNacimiento'];
$Sede=$_POST['Sede'];
$atendio_parto=$_POST['Profesion'];
$condicion_parto=$_POST['condicion_parto'];
$tipo_parto=$_POST['tipo_parto'];
$duracion_del_embarazo=$_POST['duracion_del_embarazo'];
$malformacion_congenita=$_POST['malformacion_congenita'];
$lactancia_precoz=$_POST['lactancia_precoz'];
$tipo_de_ligadura_y_corte_del_cordon=$_POST['tipo_de_ligadura_y_corte_del_cordon'];
$fechatimestamp=date('y/m/d H:i');

$sql="INSERT INTO neonato (
 `rfid`, `genero`, `peso`, `talla`, `perimetro_cefalico`, `perimetro_toracico`, `hora_de_nacimiento`, `fecha_nacimiento`, `duracion_del_embarazo`, `malformacion_congenita`, `lactancia_precoz`, `tipo_de_ligadura_y_corte_del_cordon`, `sede`, `atendio_parto`, `condicion_parto`, `tipo_parto`, `activo`, `timestamp`
) VALUES(
".$RFID."
,'".$Genero."'
,".$Peso."
,".$Talla."
,".$perimetro_cefalico."
,".$perimetro_toracico."
,'".$hora_de_nacimiento."'
,'".$fecha_nacimiento."'
,'".$duracion_del_embarazo."'
,'".$malformacion_congenita."'
,'".$lactancia_precoz."'
,'".$tipo_de_ligadura_y_corte_del_cordon."'
,".$Sede."
,'".$atendio_parto."'
,".$condicion_parto."
,".$tipo_parto."
,1
,'".$fechatimestamp."'
)";

$stmt=$db->ejecutar($sql);
/*
echo "".$RFID."
,'".$Genero."'
,".$Peso."
,".$Talla."
,".$perimetro_cefalico."
,".$perimetro_toracico."
,'".$hora_de_nacimiento."'
,'".$fecha_nacimiento."'
,'".$duracion_del_embarazo."'
,'".$malformacion_congenita."'
,'".$lactancia_precoz."'
,'".$tipo_de_ligadura_y_corte_del_cordon."'
,".$Sede."
,".$atendio_parto."
,".$condicion_parto."
,".$tipo_parto."
,1
,'".$fechatimestamp."'
" ;*/
header('Location: ../profecional.php');
 ?>