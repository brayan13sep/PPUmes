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
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$Sede=$_POST['Sede'];
$atendio_parto=$_POST['atendio_parto'];
$condicion_parto=$_POST['condicion_parto'];
$tipo_parto=$_POST['tipo_parto'];
$duracion_del_embarazo=$_POST['duracion_del_embarazo'];
$malformacion_congenita=$_POST['malformacion_congenita'];
$lactancia_precoz=$_POST['lactancia_precoz'];
$tipo_de_ligadura_y_corte_del_cordon=$_POST['tipo_de_ligadura_y_corte_del_cordon'];

echo "
".$RFID."
,'".$Genero."'
,".$Peso."
,".$Talla."
,".$perimetro_cefalico."
,".$perimetro_toracico."
,'".$hora_de_nacimiento."'
,'".$fecha_nacimiento."'
,".$Sede."
,".$atendio_parto."
,".$condicion_parto."
,".$tipo_parto."
,'".$duracion_del_embarazo."'
,'".$malformacion_congenita."'
,'".$lactancia_precoz."'
,'".$tipo_de_ligadura_y_corte_del_cordon."'";

$sql="INSERT INTO neonato (
RFID
,Genero
,Peso
,Talla
,perimetro_cefalico
,perimetro_toracico
,hora_de_nacimiento
,fecha_nacimiento
,Sede
,atendio_parto
,condicion_parto
,tipo_parto
,duracion_del_embarazo
,malformacion_congenita
,lactancia_precoz
,tipo_de_ligadura_y_corte_del_cordon
) VALUES(
".$RFID."
,'".$Genero."'
,".$Peso."
,".$Talla."
,".$perimetro_cefalico."
,".$perimetro_toracico."
,'".$hora_de_nacimiento."'
,'".$fecha_nacimiento."'
,".$Sede."
,".$atendio_parto."
,".$condicion_parto."
,".$tipo_parto."
,'".$duracion_del_embarazo."'
,'".$malformacion_congenita."'
,'".$lactancia_precoz."'
,'".$tipo_de_ligadura_y_corte_del_cordon."'
)";

$stmt=$db->ejecutar($sql);

header('Location: ../profecional.php');
 ?>