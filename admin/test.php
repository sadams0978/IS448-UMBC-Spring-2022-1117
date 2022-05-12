<?php
include('../menu.php');


//If User Group isn't set, check the DB and update the session variable
	if(!isset ($_SESSION['group'])){
	$email = $_SESSION['email'];

	//Connecting to DB and searching for user permission
	include('../db_connection.php');
	$select = "select Member from login where email_address = '$email'"; 
	
	//Looking through first result and setting the group session variable to it
	$group_result = mysqli_query($db,$select);
	$row = mysqli_fetch_row($group_result);
	$_SESSION['group'] = $row[0];
	mysqli_close();
	}

  if ($_SESSION['group'] == 'user') {
	echo ("Unauthorized, please try again!");	  
  }
	


?>
