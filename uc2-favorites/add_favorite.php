<?php
	session_start();
	include('../db_connection.php');
  	$addFav = "../uc1-Listings-View/ListingsView.php";
	//check if card is already in favorites
	if(!in_array($_GET['C_ID'], $_SESSION['favorites'])){
		array_push($_SESSION['favorites'], $_GET['C_ID']);
		$_SESSION['message'] = 'Card added to favorites';
	}
	else{
		$_SESSION['message'] = 'Card already in favorites';
	}
 
	header('location: '.$addfav);
?>
