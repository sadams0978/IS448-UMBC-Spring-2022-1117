<?php
	session_start();

	//remove the id from favaorites array
	$key = array_search($_GET['C_ID'], $_SESSION['favorites']);	
	unset($_SESSION['cart'][$key]);

	unset($_SESSION['qty_array'][$_GET['index']]);
	$_SESSION['qty_array'] = array_values($_SESSION['qty_array']);

	$_SESSION['message'] = "Product deleted from cart";
	header('location: case2.php');
?>
