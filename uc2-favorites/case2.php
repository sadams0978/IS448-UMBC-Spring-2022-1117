<?php
	//session_start(); 
	include('../menu.php');
	include('../db_connection.php');

		//$c_id = 1;
	$c_id = $_GET['C_ID'];

	$constructed_query = "SELECT * FROM STOCK WHERE C_ID= 'c_id'";

	$result = mysqli_query($db, $constructed_query);

	if(!$result){
		$error = mysqli_error($db);
		exit;
	}

	$card = mysqli_fetch_array($result);

	$name = $card['C_NAME'];
	$description = $card['C_DESC'];
	$quantity = $card['C_QUANTITY'];
	$categ = $card['C_CATEG'];
	$condition = $card['C_CONDITION'];
	$finish = $card['C_FINISH'];
	$comp = $card['C_COMP'];
	$year = $card['C_YEAR'];
	$price = $card['PRICE'];

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
		<!-- <form action = "case2.php" method = "GET"> -->
			<ul class = "cards">
				
				<li>
				<?php
				echo ("<img src='blank-card.jpg' width = '150' height = '250'/>");
				?>
				<br>
				<?php
				echo $card['C_NAME'];
				?>
				<br>
				<?php
				echo  "$price";
				?>
				<br>
				<!-- button to remove card from favorites -->
				<button href = "../index.html">Favorite</button>
				
				<button type= "button" onclick="alert('<?php echo 'Card Name: ' . ($card['C_NAME']) . '\n' . 'Card Description: ' . ($card['C_DESC']) . '\n' . 'Card Quantity: ' . ($card['C_QUANTITY']) .
				'\n' . 'Card Category: ' . ($card['C_CATEG']) . '\n' . 'Card Condition: ' . ($card['C_CONDITION']) . '\n' . 'Card Finish: ' . ($card['C_FINISH']) . 
				'\n' . 'Card Composition: ' . ($card['C_COMP']) . '\n' . 'Card Year: ' . ($card['C_YEAR']) . '\n' . 'Card Price: ' . ($card['PRICE'])?>')">Card Details</button>
				
				</li>
			</ul>
		<!-- </form> -->
		</div>

		<div class = "footer">
			<p>
			Made By: Dylan De Leon
			</p>
		</div>
	
	</body>
	
	
</html>
