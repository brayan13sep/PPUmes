<?php
	$db=Db::getInstance();
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   $user_check = $_SESSION['login_user'];
   
   $sql = "SELECT id FROM usuario WHERE usuario = '$user_check'";
   $result =$db->ejecutar($sql);

   //$login_session = $row['usuario'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:../hospital/login.php");
   }
?>