<?php

	//Only Authorized Users can access this admin page
	
	$login = "../uc5-login/index.php";	
	
	include('../menu.php');

	//If User Group isn't set redirect to sign in page
	if(!isset ($_SESSION['group'])){
	header('Location: '. $login);
	}

	
	//If the group is just user, tell the user that they are unauthorized
  	if ($_SESSION['group'] == 'admin') {
	deleteUser();	
	
	} else {
		
	echo ("<h1>Unauthorized!</h1>");
	echo ("<br>");
	echo ("Please try again later.");
	die;
		
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
