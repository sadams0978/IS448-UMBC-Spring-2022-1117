<?php

$group_result = 'user';
//If User Group isn't set, check the DB and update the session variable
	if(!isset ($_SESSION['group'])){
	
	//include('../db_connection.php');
	
	$email = $_SESSION['email'];
		
	
	$select = "select Member from login where email_address = '$email'"; 
	//$group_result = mysqli_query($db,$select);
    	//$_SESSION['group'] = $group_result;
	//mysqli_close();
	}

  echo ($select);


?>
