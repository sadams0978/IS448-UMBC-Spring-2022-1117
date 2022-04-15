<?php
	session_start();
	include('../db_connection.php');
	
	$constructed_query = "SELECT * FROM STOCK";
	$result = mysqli_query($db, $constructed_query);
	for ($card = array (); $row = $result->fetch_assoc(); $card[] = $row){
	}
	
	$card_price = $_GET['PRICE'];
	$card_name = $_GET['C_NAME'];
	$_SESSION['fav_name'] = $card_name;
	$C_NAME = $_SESSION['fav_name'];
	//need to implement session to receive liked cards from home page and display on favorites page
	
	//need to implement code to remove(unset) card(session variable) from favorites page
?>


<!doctype html>
<html>
	<head>
		<meta charset = "utf-8">
		<link rel = "stylesheet" type = "text/css" href = "../root.css"/>
		<link rel = "stylesheet" type = "text/css" href = "uc2-favorites.css"/>
		<script src="https://kit.fontawesome.com/be0f7619b0.js" crossorigin="anonymous"></script>
		
		<title> Favorites </title>
	</head>
	
	<body>
	
		<?php
		// Includes our menu bar, instead of copying and pasting through the pages
		include('../menu.php');
		?>
		
		<!-- favorites section -->
		<p class="spacer"></p>
		<div class = "favoriteCardsContainer">
			<h2> Filters: </h2>
			<form action = "case-two.php" method = "POST" name = "Filter">
				<label for = "category"> Category: </label>
					<select name = "category" id = "category">
						<option value="" disabled selected>Select your option</option>
						<option value="1">Pokémon</option>
						<option value="2">Yu Gi Oh</option>
						<option value="3">Baseball</option>
						<option value="4">Football</option>
						<option value="5">Other</option>
					</select>
				
				</br>	
					
				<label for="condition"> Condition:</label> 
					<select name= "condition" id="condition"> 
						<option value="" disabled selected>Select Condition</option>
						<option value="1">Poor</option>
						<option value="2">Average</option>
						<option value="3">Great</option>
						<option value="4">Mint</option>
					</select>
					
				</br>	

				<label for="finish"> Finish:</label> 
					<select name= "finish" id="finish"> 
						<option value="" disabled selected>Select Finish</option>
						<option value="1">Matte</option>
						<option value="2">Satin</option>
						<option value="3">Gloss</option>
						<option value="4">Other</option>
					</select>	
					
				</br>
				
				<label for="composition"> Composition:</label> 
					<select name= "composition" id="composition"> 
						<option value="" disabled selected>Select Composition</option>
						<option value="1">paperboard</option>
						<option value="2">thick paper</option>
						<option value="3">plastic</option>
						<option value="4">metal</option>
						<option value="5">other</option>
					</select>
		
				</br>
				
				<label for="year"> Year:</label> 
					<select name= "year" id="year"> 
						<option value="" disabled selected>Select Year</option>
						<option>Select Year</option>
					<?php
						for($year = 1980; $year <=2022; $year++){
						echo "<option value=".$year.">".$year."</option>";
					}
					?>
					</select>
				</br>
				
				<input type="submit" value="Submit"/>
				</br>

			</form>
		
		</div>
	
		<div class = "cardsContainer">
		<!-- <form action = "ListingsView.php" method = "POST" name = "Filter"> -->
			<ul class = "cards">
				
				<li>
				<?php
				echo ("<img src='blank-card.jpg' width = '150' height = '250'/>");
				?>
				<br>
				<?php
				echo $C_NAME;
				?>
				<br>
				<?php
				echo  'Price: ' . $card_price;
				?>
				<br>
				<!-- button to remove card from favorites -->
				<button href = "../index.html" class = "fa-solid fa-heart" style = "color:red"></button>
				
				<button type= "button" onclick="alert('<?php echo 'Card Name: ' . ($card[$i]['C_NAME']) . '\n' . 'Card Description: ' . ($card[$i]['C_DESC']) . '\n' . 'Card Quantity: ' . ($card[$i]['C_QUANTITY']) . 
				'\n' . 'Card Category: ' . ($card[$i]['C_CATEG']) . '\n' . 'Card Condition: ' . ($card[$i]['C_CONDITION']) . '\n' . 'Card Finish: ' . ($card[$i]['C_FINISH']) . 
				'\n' . 'Card Composition: ' .($card[$i]['C_COMP']) . '\n' . 'Card Year: ' .($card[$i]['C_YEAR']) . '\n' . 'Card Price: ' . ($card[$i]['PRICE'])?>')">Card Details</button>
				</li>
				
			</ul>
		</form>
		</div>
		
		<br />
		
		<div class = "footer">
			Made By: Dylan De Leon
		</div>
	
	</body>
	
	
</html>
