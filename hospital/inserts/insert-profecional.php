<?php 
require '../../DataBase/db.class.php';
require '../../DataBase/Conf.class.php';
$db=Db::getInstance();


//$Profesion="";
$no_colegiatura=$_POST['no_colegiatura'];
$tipo_documento=$_POST['tipo_documento'];
$DPI=$_POST['DPI'];
$Nombre=$_POST['Nombre'];
$primer_apellido=$_POST['primer_apellido'];
$segundo_apellido=$_POST['segundo_apellido'];
$Sede=$_POST['Sede'];
$certifica_declara=$_POST['Profesion'];
$Genero=$_POST['Genero'];
$fechatimestamp=date('y/m/d H:i');
/*echo "
".$no_colegiatura."
,".$tipo_documento."
,".$DPI."
,".$Nombre."
,".$primer_apellido."
,".$segundo_apellido."
,".$Sede."
,".$certifica_declara."
,".$Genero."";
*/
$sql="INSERT INTO profecional (
 `no_colegiatura`, `dpi`, `nombre`, `primer_apellido`, `segundo_apellido`, `genero`, `certifica_declara`, `tipo_documento`, `sede`, `profesion`, `activo`, `timestamp`
) VALUES(
".$no_colegiatura."
,".$DPI."
,'".$Nombre."'
,'".$primer_apellido."'
,'".$segundo_apellido."'
,'".$Genero."'
,".$certifica_declara."
,".$tipo_documento."
,".$Sede."
,1
,1
,'".$fechatimestamp."'
)";

$stmt=$db->ejecutar($sql);

/*echo "".$no_colegiatura."
,".$DPI."
,'".$Nombre."'
,'".$primer_apellido."'
,'".$segundo_apellido."'
,'".$Genero."'
,'".$certifica_declara."'
,'".$tipo_documento."'
,".$Sede."
,''
,1
,1
,'".$fechatimestamp."'
" ;
*/

header('Location: ../madre.php');
 ?>