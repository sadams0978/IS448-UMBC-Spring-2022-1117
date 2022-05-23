<!doctype html>
<html lang ="en">
<head>
    
    <meta http-equiv="refresh" content="1;url=../uc1-Listings-View/ListingsView.php"/>
    <link rel="stylesheet" type="text/css" href="../root.css"/>
    <link rel="stylesheet" type="text/css" href="uc2-favorites.css"/>
    
</head>
<body>
	<?php
    	include('../db_connection.php');
	?>
	<?php
	include('../menu.php');
	?>
	<h1>Added To Favorites</h1>
	<?php
		$c_ID = $_GET['C_ID'];
	
		if(!isset($_SESSION['favorites'])){
			$favoritesArr = array();
			$_SESSION['favorites'] = $favoritesArr;
		}
	
		array_push($_SESSION['favorites'],$c_ID);
		echo ($_SESSION['favorites']['c_ID']);
	?>
	
</body>
</html>
