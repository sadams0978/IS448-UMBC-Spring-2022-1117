<!doctype html>
<html lang ="en">
<head>
<meta charset="utf-8">


<link rel="stylesheet" type="text/css" href="root.css"/>
<link rel="stylesheet" type="text/css" href="usecase4.css"/>
<script src="https://kit.fontawesome.com/be0f7619b0.js" crossorigin="anonymous"></script>

	
<title>Card Description</title>
<!--get name of card from sql -->
</head>
<body>
	<?php
		// Includes our menu bar, instead of copying and pasting through the pages
	include('../menu.php');
	?>

	<?php
		//assign input in form to php variables
		/* card image, implement later

		$cardimage = $_POST["cardimage"]; 

		*/

		$category = $_POST["category"]; 
		$condition = $_POST[:condition];
		$finish = $_POST["finish"];
		$composition = $_POST["composition"];
		$year = $_POST["year"];
		$description = $_POST["description"];
		$sellerprice = $_POST["sellerprice"];
		$quantity = $_POST["quantity"];

		/* idea: iterate through $post array using foreach loop. 
		foreach ($_POST as $field => $cardattributevalue)
		{
			(isset($_POST["category"]) && (!empty($_POST["category"]))) 

		}

		*/




		if(
			(isset($_POST["category"]) && (!empty($_POST["category"]))) &&
			(isset($_POST["condition"]) && (!empty($_POST["condition"]))) &&
			(isset($_POST["finish"]) && (!empty($_POST["finish"]))) &&
			(isset($_POST["composition"]) && (!empty($_POST["composition"])) &&
			(isset($_POST["year"]) && (!empty($_POST["year"])) &&
			(isset($_POST["composition"]) && (!empty($_POST["composition"])) &&
			(isset($_POST["year"]) && (!empty($_POST["year"])) &&
			(isset($_POST["description"]) && (!empty($_POST["description"])) &&
			(isset($_POST["sellerprice"]) && (!empty($_POST["sellerprice"])) &&
			(isset($_POST["quantity"]) && (!empty($_POST["quantity"])) /* &&

			check for image. implement later

			(isset($_POST["cardimage"]) && (!empty($_POST["cardimage"])) */
		)
		{


		//insert into database with sql 


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

		//test

	?> 





<div class="footer">
	<p> 
		Shaheen Reid wrote this file
	</p>
</div>

</body>
</html>
