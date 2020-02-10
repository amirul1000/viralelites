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
	   
	  case "send_feedback":
	            $info['table']    = "feedback";
				$data['users_id']   = $_SESSION['users_id'];
                $data['topic']   = $_REQUEST['topic'];
                $data['message']   = $_REQUEST['message'];
                $data['date_created']   = date("Y-m-d H:i:s");
				$info['data']     =  $data;
				$status = $db->insert($info);
			    if($status == true)
				{
					
					      unset($info);
						  unset($data);
						$info["table"] = "users";
						$info["fields"] = array("users.*"); 
						$info["where"]   = "1  AND id='".$_SESSION['users_id']."'";
						$arr =  $db->select($info);
						
						 $address = $arr[0]['username'].' '.$arr[0]['email'];
						
					
					
					    $email = "aramseto@gmail.com";
						 //send email
						$headers  = 'MIME-Version: 1.0' . "\r\n";
						$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
						
						// Additional headers
						//$headers .= 'To: '.$data['email'].'' . "\r\n";
						$headers .= 'From: viralelites <info@viralelites.com>' . "\r\n";
						//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
						//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
						
						// Mail it
						$subject = "Feedback from  $address viralelites.com-".$_REQUEST['topic']; 
						$message_body  = $_REQUEST['message'];
						mail($email, $subject, $message_body, $headers);
					
				   echo "Feed back has been sent sucessfully";	
				}
	     break; 
	   
      default:
	       include("send_feedback_view.php");
			
   }
?>