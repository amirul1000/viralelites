<?php
	session_start();
	ob_start();
	include("../common/lib.php");
	include("../lib/class.db.php");
	include("../common/config.php");
	
	$cmd = $_REQUEST['cmd'];
	
	switch($cmd)
	{
	
		case "login":	
		    if(strlen($_REQUEST["username_email"])==0)
			{
			  echo "Username is a requied field";	
			  exit;	 
			}
			if(strlen($_REQUEST["password"])==0)
			{
			  echo "Password is a requied field";	
			  exit;	 
			}
			$info["table"]     = "users";
			$info["fields"]   = array("*");
			$info["where"]    = " 1=1 AND ( email  LIKE BINARY '".clean($db,$_REQUEST["username_email"])."' OR username  LIKE BINARY '".clean($db,$_REQUEST["username_email"])."'  )  AND password  LIKE BINARY '".clean($db,$_REQUEST["password"])."' AND user_type='client'";			
			$res  = $db->select($info);
			
			if($res[0]['verified']=='no')
			{
				$message='Login fail,your account is not verified.Please check your eamil   or resend code again if you don\'t receive any email <a href="../register/?cmd=verification_editor" class="btn"><b>Resend Code</b></a>';
				echo $message;
				break;
			}
			
			if(count($res)>0)
			{
				$_SESSION["users_id"]   = $res[0]["id"];
				$_SESSION["username"]   = $res[0]["username"];
				$_SESSION["email"]      = $res[0]["email"];
				$_SESSION["first_name"] = $res[0]["first_name"];
				$_SESSION["last_name"]  = $res[0]["last_name"];
				$_SESSION["user_type"]  = $res[0]["user_type"];
				
				
				//Header("Location: ");
				echo "success";
			}
			else
			{
				$message = "Login fail,Please verify your userid or password";
				echo $message;
				//include("login_editor.php");
			}
			break;
		case "register_view":	
			   include("register_editor.php");
			   break;
		case "register":	
		        if($_REQUEST["password"]!=$_REQUEST["rpassword"])
				{
					echo "Password & Re-Type Password is mismatch";
					break;
				}
				
				$first_name = trim($_REQUEST["first_name"]);
				$last_name = trim($_REQUEST["last_name"]);
				$username = trim($_REQUEST["username"]);
				$email = trim($_REQUEST["email"]);
				$password = trim($_REQUEST["password"]);
				$user_type = trim($_REQUEST["user_type"]);
				
					unset($info);
					unset($data);
				$info["table"] = "users";
				$info["fields"] = array("users.*"); 
				$info["where"]   = "1 AND  email='".$email."'";	
				$res =  $db->select($info);
				
				if(count($res)==0)
				{
						unset($info);
						unset($data);
					$info['table']    = "users";
					$data['first_name']   = $first_name;
					$data['last_name']   = $last_name;
					$data['username']   = $username;
					$data['email']   = $email;
					$data['password']   = $password;
					$data['user_type']   = 'client';
					$data['created_at']   = date("Y-m-d H:i:s");
					$data['verification_code']   = sha1(time());
					$data['verified']   = 'no';
					$info['data']     =  $data;
					$out =  $db->insert($info);
					if($out == 1)
					{ 
						$_SESSION['verfied_msg'] = "yes";
						$message = "success";	
						$headers  = 'MIME-Version: 1.0' . "\r\n";
						$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
						
						// Additional headers
						//$headers .= 'To: '.$data['email'].'' . "\r\n";
						$headers .= 'From: viralelites.com <info@viralelites.com>' . "\r\n";
						//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
						//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
						
						// Mail it
						$subject = "Registration at viralelites.com  system"; 
						$message2  = get_register_email_message($data['email'],$data['password'],$data['verification_code']);
						mail($data['email'], $subject, $message2, $headers);
						
						echo "success";
					}
					else
					{
					 echo $message = "Registration fail";	  	
					}
				}
				else
				{
				  echo $message = "Error-Duplicate username";
				}
			   //include("register_editor.php");
			   break;
		case "logout":
		     /////////set online offline//// 
			session_destroy();
			unset($_SESSION["users_id"]);
			unset($_SESSION["email"]);
			unset($_SESSION["first_name"]);
			unset($_SESSION["last_name"]);
			unset($_SESSION["user_type"]);
			
			session_start();
	        //ob_start();
			Header("Location:/app/member/");
			break;
		case "forget_editor":
			include("forget_editor.php");
			break;
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
		case "verification_editor":
				include("verification_editor.php");
				break;	   	 	
	    case "resend_code":
			 	$info["table"]     = "users";
				$info["fields"]   = array("*");
				$info["where"]    = " 1=1 AND email  LIKE BINARY '".$_REQUEST["email"]."'";
				$res  = $db->select($info);
				if(count($res)>0)
				{
				    $id                = $res[0]["id"];
					$email             = $res[0]["email"];	   	 
					$password          = $res[0]["password"];
					$verification_code =  sha1(time());
					
					
					   unset($info);
					   unset($data);
					 $info["table"]                =  "users"; 
					 $data['verification_code']    = $verification_code;
					 $info['data']                 =  $data;
					 $info['where']                =  "id='".$id."'";
					   $db->update($info);
				
					 //send email
					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					
					// Additional headers
					//$headers .= 'To: '.$data['email'].'' . "\r\n";
					$headers .= 'From: viralelites <info@viralelites.com>' . "\r\n";
					//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
					//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
					
					// Mail it
					$subject = "You requested activation code from viralelites  System"; 
					$message_body  = get_code_message($email ,$password,$verification_code);
					
					$message = "An email has been sent with your activation code";
					mail($email, $subject, $message_body, $headers);
					
					include("verification_editor.php");
					break;	
				}
				else
				{
					$message ="No Email is exists with this email";	
					include("verification_editor.php");
					break;	 
				}
				break;		
		case "verify":
		        $info["table"]     = "users";
				$info["fields"]   = array("*");
				$info["where"]    = " 1=1 AND verification_code='".$_REQUEST["code"]."'";
				$res  = $db->select($info);
				if(count($res)>0)
				{
				    $_SESSION['verfied_msg'] = "";	 
					
				     unset($info);
					 unset($data);
					$info['table']    = "users";
					$data['verified']   = 'yes';
					$data['status']   = 'active';
					$info['data']     =  $data;
					$info['where'] = "verification_code='".$_REQUEST["code"]."'";
					$db->update($info);
				
				     $message ="You are now verified.Please login now.";
					 $redirect = 1;
				}    
				else
				{
				     $message ="Verified code mismatch";
				}
				include("login_verified.php");
		       break;				
		default :
			include("register_view.php");
	}
	
 function get_code_message($userid,$password,$verification_code)
 {
       $str = "Dear Valued Customer,<br>
	        You requested activation code.<br>  
			Please click the link below to make your account activate.<br>
			<a href=\"http://viralelites.com/app/register/?cmd=verify&code=$verification_code\">$verification_code</a><br>
	        You login info is:<br> 
	        Your userid :$userid  <br>
			Password    :$password <br>
			Thanks,<br>
			viralelites.com Team<br>";    
	    
		return $str;
 }	
 
 function get_register_email_message($userid,$password,$verification_code)
	 {
		   $str = "Dear ".$_REQUEST["first_name"]." ".$_REQUEST["last_name"].",<br>
				You have successfully registerd at viralelites.com<br>  
				Please click the link below to make your account activate.<br>
				<a href=\"http://viralelites.com/app/register/?cmd=verify&code=$verification_code\">$verification_code</a><br>
				Or copy and paste on address bar the link below
				http://viralelites.com/app/register/?cmd=verify&code=$verification_code <br>
				You login info is:<br> 
				Your userid :$userid  <br>
				Password    :$password <br>
				Thanks,<br>
				viralelites.com Team<br>";    
			
			return $str;
	  }
	
	/*
	  check user plan exits
	*/
	function clean($db,$str) {
				$str = @trim($str);
				if(get_magic_quotes_gpc()) {
					$str = stripslashes($str);
				}
				$str = stripslashes($str);
				$str = str_replace("'","",$str);
				$str = str_replace('"',"",$str);
				//$str = str_replace("-","",$str);
				$str = str_replace(";","",$str);
				$str = str_replace("or 1","",$str);
				$str = str_replace("drop","",$str);
				
				return mysqli_real_escape_string($db->linkid,$str);
		}		
?>