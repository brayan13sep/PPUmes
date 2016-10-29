<?php 
require '../../DataBase/db.class.php';
require '../../DataBase/Conf.class.php';
$db=Db::getInstance();

$RFID=$_POST['RFID'];
$tipo_documento=$_POST['tipo_documento'];
$Nombre=$_POST['Nombre'];
$primer_apellido=$_POST['primer_apellido'];
$segundo_apellido=$_POST['segundo_apellido'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$Edad=$_POST['Edad'];
$estado_civil=$_POST['estado_civil'];
$Direccion=$_POST['Direccion'];
$nivel_educativo=$_POST['nivel_educativo'];
$tipo_ocupacion=$_POST['tipo_ocupacion'];
$total_de_embarazos=$_POST['total_de_embarazos'];
$hijos_actualmente_vivos=$_POST['hijos_actualmente_vivos'];
$hijos_nacidos_vivo_que_fallecieron=$_POST['hijos_nacidos_vivo_que_fallecieron'];
$abortos_o_nacidos_muertos=$_POST['abortos_o_nacidos_muertos'];
$fecha_nacimiento_ultimo_hijo=$_POST['fecha_nacimiento_ultimo_hijo'];
/*echo'
<br>DPI: '.$DPI.'
<br>RFID:'.$RFID.'
<br>tipo_documento:'.$tipo_documento.'
<br>Nombre:'.$Nombre.'
<br>primer_apellido:'.$primer_apellido.'
<br>segundo_apellido:'.$segundo_apellido.'
<br>fecha_nacimiento:'.$fecha_nacimiento.'
<br>Edad:'.$Edad.'
<br>estado_civil:'.$estado_civil.'
<br>Direccion:'.$Direccion.'
<br>nivel_educativo:'.$nivel_educativo.'
<br>tipo_ocupacion:'.$tipo_ocupacion.'
<br>total_de_embarazos:'.$total_de_embarazos.'
<br>HijosAtualmenteVivos:'.$hijos_actualmente_vivos.'
<br>hijos_nacidos_vivo_que_fallecieron:'.$hijos_nacidos_vivo_que_fallecieron.'
<br>abortos_o_nacidos_muertos:'.$abortos_o_nacidos_muertos.'
<br>fecha_nacimiento_ultimo_hijo:'.$fecha_nacimiento_ultimo_hijo.'
';*/
$sql="INSERT INTO madre (
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
".$DPI."
,".$RFID."
,".$tipo_documento."
,'".$Nombre."'
,'".$primer_apellido."'
,'".$segundo_apellido."'
,'".$fecha_nacimiento."'
,".$Edad."
,".$estado_civil."
,'".$Direccion."'
,".$nivel_educativo."
,'".$tipo_ocupacion."'
,".$total_de_embarazos."
,".$hijos_actualmente_vivos."
,".$hijos_nacidos_vivo_que_fallecieron."
,".$abortos_o_nacidos_muertos."
,'".$fecha_nacimiento_ultimo_hijo."'
)"; 
$stmt=$db->ejecutar($sql);

echo $fecha_nacimiento;
//header('Location: ../neonato.php');
 ?>