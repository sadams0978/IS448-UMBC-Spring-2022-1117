<!doctype html>
<html lang ="en">
<head>
<meta charset="utf-8">

<!--
<link rel="stylesheet" type="text/css" href="root.css"/>
<link rel="stylesheet" type="text/css" href="Andrew-part3.css"/>
--> 

<link rel="stylesheet" type="text/css" href="../root.css"/>
<link rel="stylesheet" type="text/css" href="usecase4.css"/>
<script src="https://kit.fontawesome.com/be0f7619b0.js" crossorigin="anonymous"></script>
	
<title>Card Description</title>
<!--get name of card from sql -->
</head>
<body>

	
<?php
// Includes our menu bar, instead of copying and pasting through the pages
include('../menu.html');
?>

	
<!-- seller enters picture for card listing--> 
<div class="left">
	<p class="card"><img src="" alt="Playing Card"  width = "300" height = "400"/></p>
	<form action="">
  		<input type="file" id="myFile" name="filename">
	</form>
</div>	

<div class="right" >
	

	<!-- Upper box containing text boxes and dropdowns for card infomrmation--> 
	<div class ="cardDetailsContainer"> 

		<!--Enter card category --> 
		<label for="category"> Category:</label> <!--from sql & php-->
			<select name= "category" id="category"> 
				<option value="" disabled selected>Select your option</option> <!-- acts as place holder prior to user interacting with element--> 
				<option value=”1”>Pokémon</option>
				<option value=”2”>Yu Gi Oh</option>
				<option value=”3”>Baseball</option>
				<option value=”4”>Football</option>
				<option value=”4”>Other</option>
			</select>
		
		<!--Enter card condition--> 
		<label for="condition"> Condition:</label> <!--from sql & php-->
			<select name= "condition" id="condition"> 
				<option value="" disabled selected>Select your option</option>
				<option value=”1”>Poor</option>
				<option value=”2”>Average</option>
				<option value=”3”>Great</option>
				<option value=”4”>Mint</option>
			</select>

		<br/> 
		

		<!--Enter card finish--> 
		<label for="finish"> Finish:</label> <!--from sql & php-->
			<select name= "finish" id="finish"> 
				<option value="" disabled selected>Select your option</option>
				<option value=”1”>Matte</option>
				<option value=”2”>Satin</option>
				<option value=”3”>Gloss</option>
				<option value=”4”>Other</option>
			</select>

		<!-- Enter card composition--> 
			<label for="composition"> Composition:</label> <!--from sql & php-->
			<select name= "composition" id="composition"> 
				<option value="" disabled selected>Select your option</option>
				<option value=”1”>paperboard</option>
				<option value=”2”>thick paper</option>
				<option value=”3”>plastic</option>
				<option value=”4”>metal</option>
				<option value=”5”>other</option>

			</select>

		<!--Enter card year--> 
		<form action=" "> <!--php stuff--> 
			<label for ="year"> Year </label>
			<input type="text" name="year" id= "year" size ="4" placeholder="Year" minlength="4" maxlength ="4" > <!--ensures that a year in four digit form e.g. 1999 is entered--> 
		</form>
		

			


	</div>
	

	<!-- lower box containing a big text box for user to provide more specific/writtn outdetails about the card --> 

	<div class ="cardDetailsContainer"> 
		<form action=" "> <!-- php stuff --> 
			<textarea id="description" rows="15" cols = "79" required>
			</textarea>
		</form>
	</div>


</div>



<!--pricinginformation-->	
<div class="pricing">

	<form action =""> 
		<label for ="sellerprice"> Price:</label>
		<input type="text" id="sellerprice" class ="priceandquantity" size ="7"></input>
	</form>
	<br/>
</div>

<div class="pricing"> 
	<form action =""> 
		<label for ="sellerquantity"> Quantity:</label>
		<input type="text" id="sellerquantity" class ="priceandquantity" size ="7" maxlength ="3"></input> 
	</form>
	<br/> 

</div> 

	
<div class="footer">

	<p> 
		Shaheen Reid wrote this file
	</p>
</div>


</body>
</html>
