<!doctype html>
<html>
	<head>
		<meta charset = "utf-8">
		<link rel = "stylesheet" type = "text/css" href = "../root.css"/>
		<link rel = "stylesheet" type = "text/css" href = "uctwo"/>
		<script src="https://kit.fontawesome.com/be0f7619b0.js" crossorigin="anonymous"></script>
		
		<title> Favtorites </title>
	</head>
	
	<body>
	
		<?php
		// Includes our menu bar, instead of copying and pasting through the pages
		include('../menu.html');
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
					<li ><i class="fa-solid fa-heart"></i><img src = "" alt = "favorite card"/>
					<br>Current Price: $ <button type="button" onclick="alert('Card Added to Shopping Card')">Add to Cart</button></li>
		
			</ul>
			
			<ul>
					<li ><i class="fa-solid fa-heart"></i><img src = "" alt = "favorite card"/>
					<br>Price: $ <button type="button" onclick="alert('Card Added to Shopping Card')">Add to Cart</button></li>
		
			</ul>
		</div>
		
		</br>
		
		<div class = "footer">
			Made By: Dylan De Leon
		</div>
	
	</body>
	
	
</html>
