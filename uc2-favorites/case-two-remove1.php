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
			<?Php
				@$item=$_POST['item'];
				while (list ($val1) = @each ($item)) {
					unset($_SESSION['cardImage'][$val1]);
				}


				require 'case2.php';
			?>
		</p>
	</body>
</html>
