<?php
session_start();
	error_reporting(0);
   include("../../common/lib.php");
   include("../../lib/class.db.php");
   include("../../common/config.php");
   
   
   
if(isset($_GET['selectpicker'])){
	$selNiche = $_GET['selNiche'];
	$receiving_account = $_GET['reciever'];
	$giver_account = $_GET['selectpicker'];
	
	
		$info['table']    = "join_pods";
 		$data['giver_account']   = $giver_account; 
		$data['receiving_account']   = $receiving_account;
		$data['date_created']   = date("Y-m-d H:i:s");
		$info['data']     =  $data;
		$status = $db->insert($info);	
			
			
			
}

?>