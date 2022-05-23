<?php
	include('../db_connection.php');
?>
<!doctype html>
<html>
	<head>
		<meta charset = "utf-8">
		<link rel = "stylesheet" type = "text/css" href = "../root.css"/>
		<link rel = "stylesheet" type = "text/css" href = "uc2-favorites.css"/>
		<script src="https://kit.fontawesome.com/be0f7619b0.js" crossorigin="anonymous"></script>
		
		<title> Add Favorite </title>
	</head>
	
	<body>
    <?php
    include('../menu.php'):
    ?>
    <h1>Added To Favorites</h1>
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
