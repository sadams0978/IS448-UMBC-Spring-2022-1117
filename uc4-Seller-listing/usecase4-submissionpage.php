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

	<p> Test</p> 
	<?php
		// Includes our menu bar, instead of copying and pasting through the pages
	include('../menu.php');
	?>

	<?php

	#connect to mysql database
	$db = mysqli_connect("studentdb-maria.gl.umbc.edu","samuela3","samuela3","samuela3");

	if (mysqli_connect_errno())	exit("Error - could not connect to MySQL");

	#get the parameter from the HTML form that this PHP program is connected to
	#since data from the form is sent by the HTTP POST action, use the $_POST array here
		//assign input in form to php variables
		/* card image, implement later

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

		/* idea: iterate through $post array using foreach loop. 
		foreach ($_POST as $field => $cardattributevalue)
		{
			(isset($_POST["category"]) && (!empty($_POST["category"]))) 

		}

		*/

		$constructed_query = " INSERT INTO STOCK(C_NAME, C_DESC, C_QUANTITY, C_CATEG, C_CONDITION, C_FINISH, C_COMP, C_YEAR, PRICE)   
		VALUES ('$cardname', '$description', '$sellerquantity', '$category', '$condition', '$finish' , '$composition' , '$year', '$unitprice')";
						  




		if(
			(isset($_POST["card_name"]) && (!empty($_POST["card_name"]))) &&
			(isset($_POST["category"]) && (!empty($_POST["category"]))) &&
			(isset($_POST["condition"]) && (!empty($_POST["condition"]))) &&
			(isset($_POST["finish"]) && (!empty($_POST["finish"]))) &&
			(isset($_POST["composition"]) && (!empty($_POST["composition"]))) &&
			(isset($_POST["year"]) && (!empty($_POST["year"]))) &&
			(isset($_POST["composition"]) && (!empty($_POST["composition"]))) &&
			(isset($_POST["year"]) && (!empty($_POST["year"]))) &&
			(isset($_POST["description"]) && (!empty($_POST["description"]))) &&
			(isset($_POST["unitprice"]) && (!empty($_POST["unitprice"]))) &&
			(isset($_POST["quantity"]) && (!empty($_POST["quantity"]))) /* &&

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
