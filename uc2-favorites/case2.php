<?php
	include('../db_connection.php');
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
	
	$_SESSION['category'] = $_POST["category"];
	$_SESSION['condition'] = $_POST["condition"];
	$_SESSION['finish'] = $_POST["finish"];
	$_SESSION['composition'] = $_POST["composition"];
	$_SESSION['year'] = $_POST["year"];
	
	if (!empty($_SESSION['category'])) {
		$category = "AND C_CATEG = '$_SESSION[category]'";
	}
	if (!empty($_SESSION['condition'])) {
		$condition = "AND C_CONDITION = '$_SESSION[condition]'";
	}

	if (!empty($_SESSION['finish'])) {
		$finish = "AND C_FINISH = '$_SESSION[finish]'";
	}

	if (!empty($_SESSION['composition'])) {
		$composition = "AND C_COMP = '$_SESSION[composition]'";
	}

	if (!empty($_SESSION['year'])) {
		$year = "AND C_YEAR = '$_SESSION[year]'";
	}
	
	$constructed_query = "SELECT * FROM STOCK WHERE C_ID < 1000 $category $condition $finish $composition $year";
	$result = mysqli_query($db, $constructed_query);
	for ($card = array (); $row = $result->fetch_assoc(); $card[] = $row){
	}
	?>
    	
	<!-- favorites section -->
<p class="spacer"></p>
	<div class ="favoriteCardsContainer"> 
	<h2> Filters </h2>
        <form action="case2.php" method="POST" name="Filter">
		
        <!--Enter card category --> 
		<label for="category"> Category:</label> 
        <!--from sql & php-->
			<select name= "category" id="category"> 
				<option value="">Select Category</option> 
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
				<option value="" >Select Condition</option>
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
				<option value="">Select Finish</option>
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
				<option value="">Select Composition</option>
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
				<option value="">Select Year</option>
            	<?php
                for($year = 1980; $year <=2022; $year++){
                echo "<option value=".$year.">".$year."</option>";
            }
            ?>
			</select>
            </br>

            <input type="submit" value="Submit"/>
        </form>
        <?php
            echo "Your current filters are:";
            echo "<br>";
            echo "Category: " . $_SESSION['category'] ;
            echo "<br>";
            echo "Condition: " . $_SESSION['condition'];
            echo "<br>";
            echo "Finish: " . $_SESSION['finish'];
            echo "<br>";
            echo "Composition: " . $_SESSION['composition'];
            echo "<br>";
            echo "Year: " . $_SESSION['year'];
        ?>
	</div>
	
	<?php
	if(isset($_SESSION['favorites'])){
		foreach($_SESSION['favorites'] as $item){
			$sql = 'SELECT * FROM STOCK WHERE C_ID='.$item;
			$result1 = mysqli_query($db,$sql);
			
	?>
		<div class = "cardsContainer">
			<ul class = "cards">
				<?php
				while ($card1 = mysqli_fetch_array($result1)){
				?>
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
				<?php
				}
				?>
			</ul>

		</div>
		<?php
		}	//end for each
	}	//end if
	else{
		echo 'There have been no favorite cards added';
	}
	mysqli_close($db);
		?>

		<p class = "spacer"></p>
		<div class = "footer">
			<p>
			Made By: Dylan De Leon
			</p>
		</div>
	
	</body>
	
	
</html>
