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
	include('../filter.php');
	$catergory = $_POST["category"];
	$condition = $_POST["condition"];
	$finish = $_POST["finish"];
	$composition = $_POST["composition"];
	$year = $_POST["year"];
	
	$constructed_query = "SELECT * FROM STOCK";
	$result = mysqli_query($db, $constructed_query);
	for ($card = array (); $row = $result->fetch_assoc(); $card[] = $row){
	}
	?>
    
    <!--CARD DISPLAY Section--> 
	<div class="cards">
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
			
		<!-- <button href = "case2.php?C_ID='.$card[$i]['C_ID'].'" onclick = "alert('Added to Favorites')">Favorite</button> -->	
		
		<button href="case2.php?c_id=$card[$i]['C_ID']">Favorite</button>	
			
		<button type= "button" onclick="alert('<?php echo 'Card Name: ' . ($card[$i]['C_NAME']) . '\n' . 'Card Description: ' . ($card[$i]['C_DESC']) . '\n' . 'Card Quantity: ' . ($card[$i]['C_QUANTITY']) . '\n' . 'Card Category: ' . ($card[$i]['C_CATEG']) . '\n' . 'Card Condition: ' . ($card[$i]['C_CONDITION']) . '\n' . 'Card Finish: ' . ($card[$i]['C_FINISH']) . '\n' . 'Card Composition: ' .($card[$i]['C_COMP']) . '\n' . 'Card Year: ' .($card[$i]['C_YEAR']) . '\n' . 'Card Price: ' . ($card[$i]['PRICE'])?>')">Card Details</button>
		</li>
		<?php
		}
		?>
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
