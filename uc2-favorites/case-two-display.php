<?php
	session_start();
?>


<!doctype html>
<html>
	<head>
		<meta charset = "utf-8">
		<link rel = "stylesheet" type = "text/css" href = "../root.css"/>
		<link rel = "stylesheet" type = "text/css" href = "uc2-favorites.css"/>
		<script src="https://kit.fontawesome.com/be0f7619b0.js" crossorigin="anonymous"></script>
		
		<title> Favtorites </title>
	</head>
	
	<body>
		<p class = "cardsContainer">
			<?php
				$_SESSION['cardImage']=array(); // Declaring session array
				array_push($_SESSION['cardImage'],'C_NAME');
				
				if(isset($_SESSION[cardImage])){
					while (list ($val) = each ($_SESSION['cardImage'])) { 
						echo "$val <br>"; 
					}
					//remove individual card 
					//echo "<a href = case-two-remove1.php> Unfavorite Card </a>";
				}
			
				require 'case2.php';
			?>
		</p>
	</body>
	
</html>
