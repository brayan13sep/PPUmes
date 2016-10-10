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
$certifica_declara=$_POST['certifica_declara'];
$Genero=$_POST['Genero'];

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
no_colegiatura
,tipo_documento
,DPI
,Nombre
,primer_apellido
,segundo_apellido
,Sede
,certifica_declara
,Genero
) VALUES(
".$no_colegiatura."
,'".$tipo_documento."'
,".$DPI."
,'".$Nombre."'
,'".$primer_apellido."'
,'".$segundo_apellido."'
,".$Sede."
,'".$certifica_declara."'
,'".$Genero."'
)";

$stmt=$db->ejecutar($sql);

/*$Profesion=$_POST['Profesion'];

	for ($i=0;$i<count($Profesion);$i++)    
	{     
	if (count($Profesion)==1 or $i==count($Profesion)-1){
		echo $Profesion[$i] ;

	}else{
		echo $Profesion[$i].",";
	}    
} */


header('Location: ../home.php');
 ?>