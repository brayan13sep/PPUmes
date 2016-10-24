<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: ../hospital/index.html");
   }
?>