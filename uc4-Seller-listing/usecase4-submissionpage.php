<!doctype html>
<html lang ="en">
<head>
<meta charset="utf-8">


<link rel="stylesheet" type="text/css" href="root.css"/>
<link rel="stylesheet" type="text/css" href="usecase4.css"/>
<script src="https://kit.fontawesome.com/be0f7619b0.js" crossorigin="anonymous"></script>

	
<title>Submission</title>

</head>
<body>

<?php
        print "point 1 print"; 
        echo "<p> point 1 E</p>"; 
        // Includes our menu bar, instead of copying and pasting through the pages
	include('../menu.php');
	include('../db_connection.php');

	print "point 2B print"; 
	echo "<p> point 2B E</p>"; 
	

	print "point 2C print"; 
	echo "<p> point 2C E</p>"; 



		if(
			(isset($_POST["card_name"]) && (!empty($_POST["card_name"]))) &&
			(isset($_POST["category"]) && (!empty($_POST["category"]))) &&
			(isset($_POST["condition"]) && (!empty($_POST["condition"]))) &&
			(isset($_POST["finish"]) && (!empty($_POST["finish"]))) &&
			(isset($_POST["composition"]) && (!empty($_POST["composition"]))) &&
			(isset($_POST["year"]) && (!empty($_POST["year"]))) &&
			//(isset($_POST["description"]) && (!empty($_POST["description"]))) &&		not working atm. play with later if the descirption info is at least posting to db
			(isset($_POST["unitprice"]) && (!empty($_POST["unitprice"]))) &&
			(isset($_POST["sellerquantity"]) && (!empty($_POST["sellerquantity"]))) /*&&
			 
			check for image upload. implement later if needed 

			(isset($_POST["cardimage"]) && (!empty($_POST["cardimage"])) */
		)
		{
			print "point 3 print"; 
			echo "<p> point 3 E</p>"; 

			#get the parameter from the HTML form that this PHP program is connected to
			#since data from the form is sent by the HTTP POST action, use the $_POST array here
			//assign input in form to php variables
		
			/* card image, implement later if needed 

			$cardimage = $_POST["cardimage"]; 

			*/

			$cardname = $_POST["card_name"];
			$category = $_POST["category"]; 
			$condition = $_POST["condition"];
			$finish = $_POST["finish"];
			$composition = $_POST["composition"];
			$year = $_POST["year"];
			$description = $_POST["description"];
			$unitprice = $_POST["unitprice"];
			$sellerquantity = $_POST["sellerquantity"];

			print "point 4 print"; 
			echo "<p> point 4 E</p>"; 

			//insert into database with sql 
			$constructed_query = " INSERT INTO STOCK (C_NAME, C_DESC, C_QUANTITY, C_CATEG, C_CONDITION, C_FINISH, C_COMP, C_YEAR, PRICE)   
			VALUES ('$cardname', '$description', '$sellerquantity', '$category', '$condition', '$finish' , '$composition' , '$year', '$unitprice')";
							
			print "point 5 print"; 
			echo "<p> point 5 E</p>"; 

			//Thank user message and offer to return to shopping or make another listing
	?> 

	<div class = "cardDetailsContainer"> 
		<p class = "center">
			Thank you! Your listing has been posted to our site. </br> 
			Click  <a href="https://jenkins-build.arlcyber.me/uc4-Seller-listing/usecase4.php">here</a> to post another listing. </br> 
			OR go <a href="https://jenkins-build.arlcyber.me/uc1-Listings-View/ListingsView.php">back</a> to continue shopping. 
		</p>
	</div>

	<?php
		print "point 6 print"; 
		echo "<p> point 6 E</p>"; 

		}else{

		//message to user to go back and entery information in all fields 
	?>

	<div class = "cardDetailsContainer"> 
		<p class = "center">
			It looks like your listing is missing some information. Please go <a href="https://jenkins-build.arlcyber.me/uc4-Seller-listing/usecase4.php">back</a> and enter information into all of the fields. </br> 
		</p>
	</div>

	<?php
		}//end of else

		print "point 7 print"; 
		echo "<p> point 7 E</p>"; 
	?> 

<div class="footer">
	<p> 
		Shaheen Reid wrote this file
	</p>
</div>

</body>
</html>
