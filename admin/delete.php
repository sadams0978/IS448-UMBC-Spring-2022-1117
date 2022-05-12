<?php

	//Only Authorized Users can access this admin page
		
	$login = "../uc5-login/index.php";	


	//If User Group isn't set redirect to sign in page
	if(!isset ($_SESSION['group'])){
	header('Location: '. $login);
	}

	
	$userGroup = $_SESSION['group'];

	
	//If the group is just user, tell the user that they are unauthorized
  	if ($userGroup == 'admin') {
	deleteUser();	
	
	} else {
		
	echo ("<h1>Unauthorized!</h1>");
	echo ("<br>");
	echo ("You are unauthorized to perform this action. Please try again later. ")
	
		
	}


	function deleteUser () {
	
	include('../db_connection.php');
	$userEmail = $_POST['userEmail'];
	$admin = "index.php";
	$delete = "DELETE FROM login WHERE email_address = '$userEmail'";

	mysqli_query($db, $delete);
	header('Location: '. $admin);
	mysqli_close($db);	
		
	}
	
	
?>
