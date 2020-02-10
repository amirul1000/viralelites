<?php
	session_start();
	ob_start();
	include("../common/lib.php");
	include("../lib/class.db.php");
	include("../common/config.php");
	
	$cmd = $_REQUEST['cmd'];
	
	switch($cmd)
	{
		case "forget_pass":
		      $info["table"]     = "users";
				$info["fields"]   = array("*");
				$info["where"]    = " 1=1 AND email  LIKE BINARY '".$_REQUEST["email"]."'";
				$res  = $db->select($info);
				if(count($res)>0)
				{
					$first_name    = $res[0]["first_name"];
					$last_name     = $res[0]["last_name"];
					$email         = $res[0]["email"];
					$password      = $res[0]["password"];
					
					$subject = "Recovery Password from www.viralelites.com";
					
					$body = "Dear $first_name $last_name,<br>
							Your Login information is like below:<br> 
							 Email:$email<br> 
							 password:$password<br><br>
							 
							 Thanks,<br>
							 viralelites Team";
					//send email
						$headers  = 'MIME-Version: 1.0' . "\r\n";
						$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
						$headers .= 'From: viralelites <info@viralelites.com>' . "\r\n";
						
					mail($_REQUEST["email"], $subject, $body, $headers);
					$message ="success";	
				}
				else
				{
				   $message = "No email is found with this address";	
				}
				echo $message;
				//include("forget_editor.php");
				break;
		default :
			include("forget_view.php");
	}
	

?>