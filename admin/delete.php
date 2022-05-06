<?php

	//Only Authorized Users can access this admin page
	include('../menu.php');
	
	if ($_SESSION['email'] !== "sam@arlcyber.me") {
	header("Location: ../404.html");
	exit();
	}
	
	include('../db_connection.php');
	$userEmail = $_POST['userEmail'];
	$admin = "index.php";
	$delete = "DELETE FROM login WHERE email_address = '$userEmail'";

	mysqli_query($db, $delete);
	header('Location: '. $admin);
	mysqli_close($db);
?>
