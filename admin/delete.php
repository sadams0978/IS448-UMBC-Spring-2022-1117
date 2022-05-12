<!doctype html>
<html lang ="en">
	
	
<head>
	
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../root.css"/>
    	<title>Delete a User</title>
</head>
<body>


<?php

	//Only Authorized Users can access this admin page
	include('../menu.php');
	$login = "../uc5-login/index.php";	
	

	//If Group isn't set redirect to sign in page
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
