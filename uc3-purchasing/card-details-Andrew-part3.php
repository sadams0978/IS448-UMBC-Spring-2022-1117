<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../root.css"/>
<link rel="stylesheet" type="text/css" href="Andrew-part3.css"/>
<script src="https://kit.fontawesome.com/be0f7619b0.js" crossorigin="anonymous"></script>
	
<title>Card Description</title>
<!--get name of card from sql -->
</head>
<body>

<?php
// Includes our menu bar, instead of copying and pasting through the pages
include('../menu.html');
?>
	

	
	
<div class="left">
	<p class="card"><img src="" alt="Playing Card"  width = "300" height = "400"/></p>
</div>	

<div class="right">
	<p class="cardDetails">Card category details here<br /> <!-- card details from sql-->
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
	
	
	<p class="cardDetails">Card description here <br /><!--card description from sql-->
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
	
	<div class="cart">
	<p class="price">Price: <!--from sql & php-->
	</p>
	<p class="price">Quantity:<!--from sql & php-->
		<select name= "addToCart"> <!-- with php depending on how many are in stock you can choose to add to inventory -->
			<option value=”1”>1</option>
			<option value=”2”>2</option>
			<option value=”3”>3</option>
			<option value=”4”>4</option>
		</select>
	</p>
		
	<p><button type="submit">Add to cart</button><!--input into cart table to sql--></p>
	</div>
	
</div>
	
<div class="footer">
	<p>Crated by Andrew Lopez</p>
</div>


</body>
</html>
