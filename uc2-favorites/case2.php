<?php
	include('../db_connection.php');
?>
<!doctype html>
<html lang ="en">
	<head>
		<meta charset="utf-8">
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
	<div class = "cardsContainer">
		<?php
			$total = 0;
			if(!empty($_SESSION['favorites'])){
			include('../db_connection.php');
			$index = 0;
			if(!isset($_SESSION['qty_array'])){
 				$_SESSION['qty_array'] = array_fill(0, count($_SESSION['favorites']), 1);
 			}
			$sql = "SELECT * FROM STOCK WHERE C_ID IN (".implode(',',$_SESSION['favorites']).")";
			$query = $db->query($sql);
				while($card1 = $query->fetch_assoc()){
					?>
					<ul class = "display">
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
						
						<a href = "delete_card.php?C_ID=<?php echo $card1['C_ID']; ?>&index=<?php echo $index; ?>"> <i class="fa-regular fa-trash-can" style="color:black"></i> </a>
						
						<input type="hidden" name="indexes[]" value="<?php echo $index; ?>">
						<input type="text" class="form-control" value="<?php echo $_SESSION['qty_array'][$index]; ?>" name="qty_<?php echo $index; ?>">
						
						<button type= "button" onclick="alert('<?php echo 'Card Name: ' . ($card1['C_NAME']) . '\n' . 'Card Description: ' . ($card1['C_DESC']) . '\n' . 'Card Quantity: ' . ($card1['C_QUANTITY']) .
						'\n' . 'Card Category: ' . ($card1['C_CATEG']) . '\n' . 'Card Condition: ' . ($card1['C_CONDITION']) . '\n' . 'Card Finish: ' . ($card1['C_FINISH']) . 
						'\n' . 'Card Composition: ' . ($card1['C_COMP']) . '\n' . 'Card Year: ' . ($card1['C_YEAR']) . '\n' . 'Card Price: ' . ($card1['PRICE'])?>')">Card Details</button>
					</li>
					</ul>
					<?php
				}
			}
			else{
			    ?>
			    <ul class = "display">
				    <li>No Cards In Favorites</li>
			    </ul>
			    <?php
			}
		?>
	</div>
	
	<!-- alert message display -->
	<div class = "cardsContainer">
		<?php
		if(isset($_SESSION['message'])){
			?>
			<div class="alert alert-info text-center">
				<?php echo $_SESSION['message']; ?>
			</div>
			<?php
			unset($_SESSION['message']);
		}
		?>
	</div>
		
		<p class = "spacer"></p>
		<div class = "footer">
			<p>
			Made By: Dylan De Leon
			</p>
		</div>
	</body>
</html>
