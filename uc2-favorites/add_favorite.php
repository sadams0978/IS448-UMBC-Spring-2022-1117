<?php
	session_start();
 
	if(!in_array($_GET['C_ID'], $_SESSION['favorites'])){
		array_push($_SESSION['favorites'], $_GET['C_ID']);
		$_SESSION['message'] = 'Product added to cart';
	}
	else{
		$_SESSION['message'] = 'Product already in cart';
	}
	$msglocation = "../uc1-Listings-View/ListingsView.php";
	header('location: '. $msglocation);
?>