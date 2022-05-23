<?php
# $c_id = $_GET['id']; <- from html code to pull the specific card the customer wants to look at
$c_id = 1;

include('../db_connection.php');

$constructed_query = "SELECT * FROM STOCK WHERE C_ID='$c_id'";

$result = mysqli_query($db, $constructed_query);

if(!$result){
	$error = mysqli_error($db);
	exit;
}

$card = mysqli_fetch_array($result);

$name = $card['C_NAME'];
$description = $card['C_DESC'];
$quantity = $card['C_QUANTITY'];
$categ = $card['C_CATEG'];
$condition = $card['C_CONDITION'];
$finish = $card['C_FINISH'];
$comp = $card['C_COMP'];
$year = $card['C_YEAR'];
$price = $card['PRICE'];

?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../root.css"/>
<link rel="stylesheet" type="text/css" href="Andrew-part3.css"/>
<script src="https://kit.fontawesome.com/be0f7619b0.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="Andrew-part3-js.js"></script>
	
<title><?php echo "$name Description"; ?></title>
<!--get name of card from sql -->
</head>
<body>
	
<div id="c_id" style="display: none"> // echo to send to javascript
	<?php 
		echo htmlspecialchars($c_id);
	?>	
</div>

<?php
// Includes our menu bar, instead of copying and pasting through the pages
include('../menu.php');
?>
	

<div class="left">
	<p class="card">
		<figure class= "zoom" onMouseMove="zoom(event)">
		<img src="../uc2-favorites/blank-card.jpg" alt="Playing Card"/>
		</figure>
	</p>
</div>	

<div class="right">
	<p class="cardDetails"><span class= "titles">Card Information</span><br />
		<?php
			echo "Card Category: $categ <br />
			Card Condition: $condition <br />
			Card Finish: $finish <br />
			Card Composition: $comp <br />
			Card Year: $year";
		?>
	</p>
	
	
	<p class="cardDetails"><span class="titles">Card Description</span><br /><!--card description from sql-->
		<?php echo $description ?>
	</p>
	
	<div class="cart">
	<p class="price">Price: <?php $price?><!--from sql & php-->
	</p>
	
	<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="amount"></form>
		<select name= "addToCart" form="amount" id="selectAmount"> <!-- with php depending on how many are in stock you can choose to add to inventory -->
			<?php
			for ($i = 1; $i <= $quantity; $i++){
				echo ("<option value='$i'>$i</option>");
			}
			?>
		</select>
	</p>
	
	
	<?php
		$_SESSION['cart'][$c_id]['qty'] = $_POST['addToCart'];
	?>
		
	<p><input type="submit" value = "Add to Cart" onclick="alert('Card Added to Shopping Card')"><!--input into cart table to sql--></p>
	
	</div>
	
</div>
	
<div class="footer">
	<p>Crated by Andrew Lopez</p>
</div>


</body>
</html>
