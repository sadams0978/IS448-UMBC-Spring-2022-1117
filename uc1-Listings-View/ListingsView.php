<?php
    include('../db_connection.php');
?>
<!doctype html>
<html lang ="en">
<head>
    
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../root.css"/>
    <link rel="stylesheet" type="text/css" href="ListingsView.css"/>
    <script src="https://kit.fontawesome.com/be0f7619b0.js" crossorigin="anonymous"></script>

    <title>Card Listings</title>
</head>
<body>
	
	<?php
	// Includes our menu bar, instead of copying and pasting through the pages
	include('../menu.php');
	?>
	
    <!--FILTER Section--> 
	<p class="spacer"></p>
	<div class ="cardDetailsContainer"> 
	<h2> Filters </h2>
        <form action="ListingsView.php" method="POST" name="Filter">
		
        <!--Enter card category --> 
		<label for="category"> Category:</label> 
        <!--from sql & php-->
			<select name= "category" id="category"> 
				<option value="" disabled selected>Select Category</option> 
        <!-- acts as place holder prior to user interacting with element--> 
				<option value="1">Pokémon</option>
				<option value="2">Yu Gi Oh</option>
				<option value="3">Baseball</option>
				<option value="4">Football</option>
				<option value="5">Other</option>
			</select>
		<br/>

		<!--Enter card condition--> 
		<label for="condition"> Condition:</label> 
        <!--from sql & php-->
			<select name= "condition" id="condition"> 
				<option value="" disabled selected>Select Condition</option>
				<option value="1">Poor</option>
				<option value="2">Average</option>
				<option value="3">Great</option>
				<option value="4">Mint</option>
			</select>
		<br/> 

		<!--Enter card finish--> 
		<label for="finish"> Finish:</label> 
        <!--from sql & php-->
			<select name= "finish" id="finish"> 
				<option value="" disabled selected>Select Finish</option>
				<option value="1">Matte</option>
				<option value="2">Satin</option>
				<option value="3">Gloss</option>
				<option value="4">Other</option>
			</select>
		<br/>

		<!-- Enter card composition--> 
		<label for="composition"> Composition:</label> 
        <!--from sql & php-->
			<select name= "composition" id="composition"> 
				<option value="" disabled selected>Select Composition</option>
				<option value="1">paperboard</option>
				<option value="2">thick paper</option>
				<option value="3">plastic</option>
				<option value="4">metal</option>
				<option value="5">other</option>
			</select>
            </br>

        <!-- Enter card Year--> 
		<label for="year"> Year:</label> 
        <!--from sql & php-->
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
    <!--FILTER Section Over--> 
    
    <!--CARD DISPLAY Section--> 
	<div class="cards">
	<ul>
		<li ><img src="blankcard.jpg"/><br>Price: $$ <button 
type="button" onclick="alert('Card Added to Shopping Card')">Add this 
Card</button></li>
		<li ><img src="blankcard.jpg"/><br>Price: $$ <button 
type="button" onclick="alert('Card Added to Shopping Card')">Add this 
Card</button></li>
		<li ><img src="blankcard.jpg"/><br>Price: $$ <button 
type="button" onclick="alert('Card Added to Shopping Card')">Add this 
Card</button></li>
		<li ><img src="blankcard.jpg"/><br>Price: $$ <button 
type="button" onclick="alert('Card Added to Shopping Card')">Add this 
Card</button></li>
		<li ><img src="blankcard.jpg"/><br>Price: $$ <button 
type="button" onclick="alert('Card Added to Shopping Card')">Add this 
Card</button></li>
		<li ><img src="blankcard.jpg"/><br>Price: $$ <button 
type="button" onclick="alert('Card Added to Shopping Card')">Add this 
Card</button></li>
	</ul>
	<ul>
		<li ><img src="blankcard.jpg"/><br>Price: $$ <button 
type="button" onclick="alert('Card Added to Shopping Card')">Add this 
Card</button></li>
		<li ><img src="blankcard.jpg"/><br>Price: $$ <button 
type="button" onclick="alert('Card Added to Shopping Card')">Add this 
Card</button></li>
		<li ><img src="blankcard.jpg"/><br>Price: $$ <button 
type="button" onclick="alert('Card Added to Shopping Card')">Add this 
Card</button></li>
		<li ><img src="blankcard.jpg"/><br>Price: $$ <button 
type="button" onclick="alert('Card Added to Shopping Card')">Add this 
Card</button></li>
		<li ><img src="blankcard.jpg"/><br>Price: $$ <button 
type="button" onclick="alert('Card Added to Shopping Card')">Add this 
Card</button></li>
		<li ><img src="blankcard.jpg"/><br>Price: $$ <button 
type="button" onclick="alert('Card Added to Shopping Card')">Add this 
Card</button></li>
	</ul>
	</div>
    <!--CARD DISPLAY Section Over--> 


    <!-- Work Credits -->
    <p class="spacer"></p>
    <div class="footer">
	    <p> 
		Gavin Phillips wrote this file
	    </p>
    </div>

</body>
</html> 
