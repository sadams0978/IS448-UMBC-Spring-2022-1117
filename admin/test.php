<?php
include('../menu.php');

//$group_result = 'user';
//If User Group isn't set, check the DB and update the session variable
	if(!isset ($_SESSION['group'])){
	$email = $_SESSION['email'];
		
	include('../db_connection.php');
	$select = "select Member from login where email_address = '$email'"; 
		
		
	echo ($select);
	$group_result = mysqli_query($db,$select);
    	$_SESSION['group'] = $group_result;
	mysqli_close();
	}

  echo ("We have made it past with the group of " . $_SESSION['group']);


?>
