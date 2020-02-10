<?php
       session_start();
       include("../../common/lib.php");
	   include("../../lib/class.db.php");
	   include("../../common/config.php");
	   
	    if(empty($_SESSION['users_id'])) 
	   {
	     Header("Location: ../login/");
	   }
	  
	   $cmd = $_REQUEST['cmd'];
	   switch($cmd)
	   {
	     
		  case 'add': 
				$info['table']    = "users";
				$data['username']   = $_REQUEST['username'];
                $data['email']   = $_REQUEST['email'];
                $data['password']   = $_REQUEST['password'];
                $data['title']   = $_REQUEST['title'];
                $data['first_name']   = $_REQUEST['first_name'];
                $data['last_name']   = $_REQUEST['last_name'];
                $data['dob']   = $_REQUEST['dob'];
                $data['gender']   = $_REQUEST['gender'];
                $data['company']   = $_REQUEST['company'];
                     
				if(strlen($_FILES['file_picture']['name'])>0 && $_FILES['file_picture']['size']>0)
				{
					
					if(!file_exists("../../users_images"))
					{ 
					   mkdir("../../users_images",0755);	
					}
					if(empty($_REQUEST['id']))
					{
					  $file=getMaxId($db)."_".str_replace(" ","_",strtolower(trim($_FILES['file_picture']['name'])));
					}
					else
					{
					  $file=trim($_REQUEST['id'])."_".str_replace(" ","_",strtolower(trim($_FILES['file_picture']['name'])));
					}
					$filePath="../../users_images/".$file;
					move_uploaded_file($_FILES['file_picture']['tmp_name'],$filePath);
					$data['file_picture']="users_images/".trim($file);
				}
                $data['address']   = $_REQUEST['address'];
                $data['city']   = $_REQUEST['city'];
                $data['state']   = $_REQUEST['state'];
                $data['zip']   = $_REQUEST['zip'];
                $data['country_id']   = $_REQUEST['country_id'];
                $data['social_link_name']   = $_REQUEST['social_link_name'];
                $data['access_key']   = $_REQUEST['access_key'];
                $data['token']   = $_REQUEST['token'];
                $data['created_at']   = $_REQUEST['created_at'];
                $data['updated_at']   = $_REQUEST['updated_at'];
                $data['user_type']   = $_REQUEST['user_type'];
                $data['status']   = $_REQUEST['status'];
                $data['verification_code']   = $_REQUEST['verification_code'];
                $data['verified']   = $_REQUEST['verified'];
                
				
				$info['data']     =  $data;
				
				if(empty($_REQUEST['id']))
				{
					 $db->insert($info);
				}
				else
				{
					$Id            = $_REQUEST['id'];
					$info['where'] = "id=".$Id;
					
					$db->update($info);
				}
				
				include("users_list.php");						   
				break;    
		case "edit":      
				$Id               = $_REQUEST['id'];
				if( !empty($Id ))
				{
					$info['table']    = "users";
					$info['fields']   = array("*");   	   
					$info['where']    =  "id=".$Id;
				   
					$res  =  $db->select($info);
				   
					$Id        = $res[0]['id'];  
					$username    = $res[0]['username'];
					$email    = $res[0]['email'];
					$password    = $res[0]['password'];
					$title    = $res[0]['title'];
					$first_name    = $res[0]['first_name'];
					$last_name    = $res[0]['last_name'];
					$dob    = $res[0]['dob'];
					$gender    = $res[0]['gender'];
					$company    = $res[0]['company'];
					$file_picture    = $res[0]['file_picture'];
					$address    = $res[0]['address'];
					$city    = $res[0]['city'];
					$state    = $res[0]['state'];
					$zip    = $res[0]['zip'];
					$country_id    = $res[0]['country_id'];
					$social_link_name    = $res[0]['social_link_name'];
					$access_key    = $res[0]['access_key'];
					$token    = $res[0]['token'];
					$created_at    = $res[0]['created_at'];
					$updated_at    = $res[0]['updated_at'];
					$user_type    = $res[0]['user_type'];
					$status    = $res[0]['status'];
					$verification_code    = $res[0]['verification_code'];
					$verified    = $res[0]['verified'];
					
				 }
						   
				include("users_editor.php");						  
				break;
						   
         case 'delete': 
				$Id               = $_REQUEST['id'];
				
				$info['table']    = "users";
				$info['where']    = "id='$Id'";
				
				if($Id)
				{
					$db->delete($info);
				}
				include("users_list.php");						   
				break; 
						   
         case "list" :    	 
			  if(!empty($_REQUEST['page'])&&$_SESSION["search"]=="yes")
				{
				  $_SESSION["search"]="yes";
				}
				else
				{
				   $_SESSION["search"]="no";
					unset($_SESSION["search"]);
					unset($_SESSION['field_name']);
					unset($_SESSION["field_value"]); 
				}
				include("users_list.php");
				break; 
        case "search_users":
				$_REQUEST['page'] = 1;  
				$_SESSION["search"]="yes";
				$_SESSION['field_name'] = $_REQUEST['field_name'];
				$_SESSION["field_value"] = $_REQUEST['field_value'];
				include("users_list.php");
				break;  								   
						
	     default :    
		       include("users_list.php");		         
	   }

//Protect same image name
 function getMaxId($db)
 {	  
   $sql    = "SHOW TABLE STATUS LIKE 'users'";
	$result = $db->execQuery($sql);
	$row    = $db->resultArray();
	return $row[0]['Auto_increment'];	   
 } 	 
?>
