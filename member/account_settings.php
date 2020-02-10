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
	  case "change_password":
	  
	           
				
	            $info['table']    = "users";
				$data['email']   = $_REQUEST['email'];
				$data['password']   = $_REQUEST['password'];
				$info['data']     =  $data;
								
				if(!empty($_SESSION["users_id"]))
				{
				   if(get_password($db,$_REQUEST['email'],$_REQUEST['old_password']) ==true)
				   {
						$Id            = $_SESSION['user_id'];
						$info['where'] =  "id='".$_SESSION['users_id']."'";				
						$db->update($info);
						echo $message = "password has been changed successfully";
						
						$email = $_REQUEST['email'];
						 //send email
						$headers  = 'MIME-Version: 1.0' . "\r\n";
						$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
						
						// Additional headers
						//$headers .= 'To: '.$data['email'].'' . "\r\n";
						$headers .= 'From: viralelites <info@viralelites.com>' . "\r\n";
						//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
						//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
						
						// Mail it
						$subject = "Password changed at viralelites.com"; 
						$message_body  = "Your password has been changed &
						                  your new password:".$_REQUEST['password'];
						mail($email, $subject, $message_body, $headers);
						
				   }	
				   else
				   {
					  echo $message = "Old and new password mismatch";
				   }
				}
				exit;
	      break;   
      default:
	       include("account_settings_view.php");
			
   }
   
   function get_password($db,$email,$password)
	{
		   unset($info);
		   unset($data);
		$info['table']    = "users";
		$info['fields']   = array("*");
		$info['where']    =  "email='".$email."' AND password='".$password."'";
		$res  =  $db->select($info);
		if(count($res))
		{
		  return true;
		}
		return false;
	}
?>