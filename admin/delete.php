<?php

	//Only Authorized Users can access this admin page
	include('../menu.php');
		
	$login = "../uc5-login/index.php"	


	if(!isset ($_SESSION['group'])){
	header('Location: '. $login);
	die;		
	}

	if ($_SESSION['group'] !== 'admin') {	
	echo ("Unauthorized, only admin users can delete users!");
	die;	
	}


	
	
	include('../db_connection.php');
	$userEmail = $_POST['userEmail'];
	$admin = "index.php";
	$delete = "DELETE FROM login WHERE email_address = '$userEmail'";

	mysqli_query($db, $delete);
	header('Location: '. $admin);
	mysqli_close($db);
?>
