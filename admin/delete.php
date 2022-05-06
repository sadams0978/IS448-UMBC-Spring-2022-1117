<?php
	//Only Authorized Users can access this admin page
	$404 = "../404.html";
	session_start(); 
	
	if ($_SESSION['email'] !== "sam@arlcyber.me") {
	header("HTTP/1.0 404 Not Found");
	header('Location: '. $404); 
	die();
	}
	
	include('../db_connection.php');
	$userEmail = $_POST['userEmail'];
	$admin = "index.php";
	$delete = "DELETE FROM login WHERE email_address = '$userEmail'";

	mysqli_query($db, $delete);
	header('Location: '. $admin);
	mysqli_close($db);
?>
