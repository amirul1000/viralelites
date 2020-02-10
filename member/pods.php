<?php
    session_start();
   include("../common/lib.php");
   include("../lib/class.db.php");
   include("../common/config.php");
   
   if(empty($_SESSION["users_id"]))
   {
       Header("Location: ../register");
   }
   
   $cmd = $_REQUEST['cmd'];
   
   switch($cmd)
   {
	   
	   case "add_pod":
			$info['table']    = "pods";
			$data['users_id']  = $_SESSION['users_id'];
			$data['pods_category'] = $_REQUEST['selNiche'];
			$data['giver_account']   =  $_REQUEST['selectpicker'];
			$data['receiving_account']   =  $_REQUEST['reciever'];
			$data['date_created']   = date("Y-m-d H:i:s");
			//$info['debug']     =  true;
			$info['data']     =  $data;
			$status = $db->insert($info);
			
			if($status==true)
			{
			  echo "Your information has been saved sucessfully";	
			}
							
				
	   break;
      default:
	       include("pods_view.php");
			
   }
?>