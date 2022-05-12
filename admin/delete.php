<?php

	//Only Authorized Users can access this admin page
	include('../menu.php');
		
	$adminPage = "index.php"	


	if(!isset ($_SESSION['group'])){
	header('Location: '. $adminPage);
	die;		
	}

	if ($_SESSION['group'] != 'admin') {	
	header('Location: '. $adminPage);
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
