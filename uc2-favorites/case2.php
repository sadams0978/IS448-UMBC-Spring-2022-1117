<!doctype html>
<html lang ="en">
	<head>
		<meta charset="utf-8">
		<link rel = "stylesheet" type = "text/css" href = "../root.css"/>
		<link rel = "stylesheet" type = "text/css" href = "uc2-favorites.css"/>
		<script src="https://kit.fontawesome.com/be0f7619b0.js" crossorigin="anonymous"></script>
		
		<title> Favorites </title>
	</head>
	
	<body>
	<?php include('../db_connection.php'); ?>
        
	// Includes our menu bar, instead of copying and pasting through the pages
	<?php include('../menu.php'); ?>
		
	<div class = "cardsContainer">
	<?php
	if(isset($_SESSION['favorites'])){
		foreach($_SESSION['favorites'] as $item){
			$sql = 'SELECT * FROM STOCK WHERE C_ID='.$item;
			$result1 = mysqli_query($db,$sql);
			$card1 = mysqli_fetch_array($result1);	
	?>
	<ul class = "cards">
		<li>
		<?php
		echo ("<img src='blank-card.jpg' width = '150' height = '250'/>");
		?>
		<br>
		<?php
		echo ($card1['C_NAME']);
		?>
		<br>
		<?php
		echo "Price: " . ($card1['PRICE']);	
		?>
		<br>
		<?php
		echo ($card1['C_ID']);	
		?>
		<br>
		<!-- button to remove card from favorites -->	
		<?php
		echo '<a href = "../uc1-Listings-View/ListingsView.php"><button class = "fa-regular fa-heart" style = "color:red"></button></a>';
		?>
				
		<button type= "button" onclick="alert('<?php echo 'Card Name: ' . ($card1['C_NAME']) . '\n' . 'Card Description: ' . ($card1['C_DESC']) . '\n' . 'Card Quantity: ' . ($card1['C_QUANTITY']) .
		'\n' . 'Card Category: ' . ($card1['C_CATEG']) . '\n' . 'Card Condition: ' . ($card1['C_CONDITION']) . '\n' . 'Card Finish: ' . ($card1['C_FINISH']) . 
		'\n' . 'Card Composition: ' . ($card1['C_COMP']) . '\n' . 'Card Year: ' . ($card1['C_YEAR']) . '\n' . 'Card Price: ' . ($card1['PRICE'])?>')">Card Details</button>
				
		</li>
	</ul>
	<?php
			}
	}
	?>
	</div>	

		<p class = "spacer"></p>
		<div class = "footer">
			<p>
			Made By: Dylan De Leon
			</p>
		</div>
	</body>
</html>
