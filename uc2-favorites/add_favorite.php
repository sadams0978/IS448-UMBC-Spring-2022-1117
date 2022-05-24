<?php
	include('../db_connection.php');
	include('../menu.php');
	//check if card in favorites
	if(!in_array($_GET['C_ID'], $_SESSION['favorites'])){
		array_push($_SESSION['favorites'], $_GET['C_ID']);
		$_SESSION['message'] = 'Card Added to Favorites';
	}
	else{
		$_SESSION['message'] = 'Card Already in Favorites';
	}
	
	$msglocation = "../uc1-Listings-View/ListingsView.php";
	header('location: '. $msglocation);
?>
