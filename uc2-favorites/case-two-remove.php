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
		<?php
		// Includes our menu bar, instead of copying and pasting through the pages
		include('../menu.php');
		?>
		
		<p class = "cardsContainer">
			<?php
				while (list ($val) = each ($_SESSION['cardImage'])) { 
					echo "$val <br>"; 
					unset($_SESSION['cardImage']);
				}
				//require 'case2.php';
			?>	
		</p>
		<?php
			require 'case2.php';
		?>
	</body>
</html>
