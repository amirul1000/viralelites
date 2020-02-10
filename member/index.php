<?php
    session_start();
   include("../common/lib.php");
   include("../lib/class.db.php");
   include("../common/config.php");
   include("lib.php");
   
   if(empty($_SESSION["users_id"]))
   {
       Header("Location: ../register");
   }
   
   $cmd = $_REQUEST['cmd'];
   
   switch($cmd)
   {
	   
	   case "NEW":
	            $info['table']    = "account";
				$data['users_id']   = $_SESSION['users_id'];
                $data['username']   = $_REQUEST['username'];
                $data['password']   = $_REQUEST['password'];
                $data['date_created']   = date("Y-m-d H:i:s");
                $data['status']   = 'active';
				$info['data']     =  $data;
					 $db->insert($info);
				echo "New username has been added successfully";
	       break;
	   case "EDIT":
	             $info['table']    = "account";
                $data['username']   = $_REQUEST['username'];
                $data['password']   = $_REQUEST['password'];
                $data['date_created']   = date("Y-m-d H:i:s");
                $data['status']   = 'active';
				$info['data']     =  $data;
				$info['where'] = "users_id='".$_SESSION['users_id']."'";
				$db->update($info);
				
				echo "Update has been completed successfully";
				
	       break; 
	    case "REMOVE":
		        $users_id         = $_SESSION['users_id'];
				$info['table']    = "account";
				$info['where']    = "users_id='$users_id'";
				if($users_id)
				{
					$db->delete($info);
				}
				echo "Data has been removed successfully";
	       break;
      default:
	       /*  if(!empty($_REQUEST['code']))
		   {
			   //$url =  'https://www.instagram.com/oauth/authorize/?client_id=76268f8d0fc44de89f630616d78b1bac&redirect_uri=https://viralelites.com/app/member/&response_type=code';
			 $_SESSION['code'] = $_REQUEST['code'];
			   
			   $uri = 'https://api.instagram.com/oauth/access_token'; 
			   $data = [
					'client_id' => '76268f8d0fc44de89f630616d78b1bac', 
					'client_secret' => '9b891a1b5d044a7bb35aef576ab61360', 
					'grant_type' => 'authorization_code', 
					'redirect_uri' => 'https://viralelites.com/app/member/', 
					'code' => $_SESSION['code']
				];
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $uri); // uri
				curl_setopt($ch, CURLOPT_POST, true); // POST
				curl_setopt($ch, CURLOPT_POSTFIELDS, $data); // POST DATA
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // RETURN RESULT true
				curl_setopt($ch, CURLOPT_HEADER, 0); // RETURN HEADER false
				curl_setopt($ch, CURLOPT_NOBODY, 0); // NO RETURN BODY false / we need the body to return
				curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // VERIFY SSL HOST false
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // VERIFY SSL PEER false
				$result = json_decode(curl_exec($ch)); // execute curl
				
				 $_SESSION['access_token'] = $result->access_token;
				 
				print_r($result); 
				 
		   }*/
	      include("home_view.php");
			
   }
?>