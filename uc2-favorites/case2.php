<!doctype html>
<html>
	<head>
		<meta charset = "utf-8">
		<link rel = "stylesheet" type = "text/css" href = "../root.css"/>
		<link rel = "stylesheet" type = "text/css" href = "uctwo.css"/>
		<script src="https://kit.fontawesome.com/be0f7619b0.js" crossorigin="anonymous"></script>
		
		<title> Favtorites </title>
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
			</form>
		
		</div>
		
		<!-- cards section -->
		<div class = "cardsContainer">
			<ul>
					<li ><img src = "blank-card.jpg" alt = "favorite card"/>
					<br><button class="fa-solid fa-heart" style="color:red"></button> Current Price: $ <button type="button" onclick="alert('Card Added to Shopping Card')">Add to Cart</button></li>
		
			</ul>

			</br>
			
			<ul>
					<li ><img src = "blank-card.jpg" alt = "favorite card"/>
					<br><button class="fa-solid fa-heart" style="color:red"></button> Current Price: $ <button type="button" onclick="alert('Card Added to Shopping Card')">Add to Cart</button></li>
		
			</ul>
		</div>
		
		</br>
		
		<div class = "footer">
			Made By: Dylan De Leon
		</div>
	
	</body>
	
	
</html>
