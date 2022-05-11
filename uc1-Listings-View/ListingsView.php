<?php
    session_start();
    include('../db_connection.php');
    $constructed_query = "SELECT * FROM STOCK";
	$result = mysqli_query($db, $constructed_query);
	for ($card = array (); $row = $result->fetch_assoc(); $card[] = $row){
	}
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
				<option value="Pokemon">Pokemon</option>
				<option value="Yu Gi Oh">Yu Gi Oh</option>
				<option value="Baseball">Baseball</option>
				<option value="Football">Football</option>
				<option value="Hockey">Hockey</option>
				<option value="Other">Other</option>
			</select>
		<br/>

		<!--Enter card condition--> 
		<label for="condition"> Condition:</label> 
        <!--from sql & php-->
			<select name= "condition" id="condition"> 
				<option value="" disabled selected>Select Condition</option>
				<option value="Poor">Poor</option>
				<option value="Average">Average</option>
				<option value="Great">Great</option>
				<option value="Mint">Mint</option>
			</select>
		<br/> 

		<!--Enter card finish--> 
		<label for="finish"> Finish:</label> 
        <!--from sql & php-->
			<select name= "finish" id="finish"> 
				<option value="" disabled selected>Select Finish</option>
				<option value="Matte">Matte</option>
				<option value="Satin">Satin</option>
				<option value="Gloss">Gloss</option>
				<option value="Other">Other</option>
			</select>
		<br/>

		<!-- Enter card composition--> 
		<label for="composition"> Composition:</label> 
        <!--from sql & php-->
			<select name= "composition" id="composition"> 
				<option value="" disabled selected>Select Composition</option>
				<option value="Paper Board">Paper Board</option>
				<option value="Thick Paper">Thick Paper</option>
				<option value="Plastic">Plastic</option>
				<option value="Metal">Metal</option>
				<option value="Other">Other</option>
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
	<!-- Test forms code by Dylan -->
	<form method = "post" action = "case2.php">
		
		<ul class="cardDisplay">
		<?php
		for($i = 0; $i < count($card); $i++){
		?>
		<li>
		<?php
		echo ("<img src='blankcard.jpg'/>");
		?>
		<br>
		<?php
		echo ($card[$i]['C_NAME']);
		?>
		<br>
		<?php
		echo  'Price: ' . ($card[$i]['PRICE']);
		?>
		<br>
		<!-- button to add card as a favorite "dylan"-->
		<!--<button href = "case2.php?card = 'cardInfo'">Favorite</button>-->
		
		<!-- favorites submit button test -->
		<input type = "hidden" name = "text" value = "<?php echo $card; ?>">
		<button type="submit">Favorite</button>
		<?php
		$card = $_POST["text"];	
		?>
			
		<button type= "button" onclick="alert('<?php echo 'Card Name: ' . ($card[$i]['C_NAME']) . '\n' . 'Card Description: ' . ($card[$i]['C_DESC']) . '\n' . 'Card Quantity: ' . ($card[$i]['C_QUANTITY']) . '\n' . 'Card Category: ' . ($card[$i]['C_CATEG']) . '\n' . 'Card Condition: ' . ($card[$i]['C_CONDITION']) . '\n' . 'Card Finish: ' . ($card[$i]['C_FINISH']) . '\n' . 'Card Composition: ' .($card[$i]['C_COMP']) . '\n' . 'Card Year: ' .($card[$i]['C_YEAR']) . '\n' . 'Card Price: ' . ($card[$i]['PRICE'])?>')">Card Details</button>
		</li>
		<?php
		}
		?>
		</ul>
	</form>
        <!-- end form -->
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
