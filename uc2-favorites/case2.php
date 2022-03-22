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
		
		<!-- favorites section -->
		<div class = "favoriteCardsContainer">
			<h2> Filters: </h2>
				<label for = "category"> Category: </label>
					<select name = "category" id = "category">
						<option value="" disabled selected>Select your option</option>
					</select>
				
				</br>	
					
				<label for = "category"> Other Category </label>
					<select name = "category" id = "category">
						<option value="" disabled selected>Select your option</option>
					</select>
					
				</br>	

				<label for = "category"> Other Category </label>
					<select name = "category" id = "category">
						<option value="" disabled selected>Select your option</option>
					</select>	
		
		</div>
		
		<!-- cards section -->
		<div class = "cardsContainer">
			<ul>
					<li ><i class="fa-solid fa-heart"></i><img src = "blank-card.jpg" alt = "favorite card" width = "200" height = "300"/>
					<br>Current Price: $ <button type="button" onclick="alert('Card Added to Shopping Card')">Add to Cart</button></li>
		
			</ul>
			
			</br>
			
			<ul>
					<li ><i class="fa-solid fa-heart"></i><img src = "blank-card.jpg" alt = "favorite card" width = "200" height = "300"/>
					<br>Current Price: $ <button type="button" onclick="alert('Card Added to Shopping Card')">Add to Cart</button></li>
		
			</ul>
		</div>
		
		</br>
		
		<div class = "footer">
			Made By: Dylan De Leon
		</div>
	
	</body>
	
	
</html>
