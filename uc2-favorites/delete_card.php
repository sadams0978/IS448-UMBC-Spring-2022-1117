<?php
	session_start();

	//remove the id from favaorites array
	$key = array_search($_GET['C_ID'], $_SESSION['favorites']);	
	unset($_SESSION['cart'][$key]);


	$_SESSION['message'] = "Product deleted from cart";
	header('location: case2.php');
?>
