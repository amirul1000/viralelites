<?php 

   $host     = "localhost"; 
   $database = "viralelites";
   $user     = "root";
   $password = "secret";
   
   
   /*$host     = "localhost"; 
   $database = "viraleli_ap18";
   $user     = "viraleli_jon1233";
   $password = "amirul123!";*/
   
   $db  = new Db($host,$user,$password,$database);
   
   $GLOBALS['DB'] = $db;

?>
