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
	Added To Favorites
	<?php
		$C_ID = $_GET['C_ID'];
	
		if(!isset($_SESSION['favorites'])){
			$favoritesArr = array();
			$_SESSION['favorites'] = $favoritesArr;
		}
	
		array_push($_SESSION['favorites'],$C_ID);
	?>
	
</body>
</html>
