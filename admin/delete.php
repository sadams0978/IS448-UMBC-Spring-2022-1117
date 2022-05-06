<?php

	if ($_SESSION['email'] !== "sam@arlcyber.me") {
	header("HTTP/1.0 404 Not Found");
	include ("../404.html");
	die();
	}


include('../db_connection.php');
include ('../menu.php');
$userEmail = $_POST['userEmail'];
$admin = "index.php";
$delete = "DELETE FROM login WHERE email_address = '$userEmail'";

mysqli_query($db, $delete);
header('Location: '. $admin);
mysqli_close($db);


?>
