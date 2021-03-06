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
        
        // Includes our menu bar, instead of copying and pasting through the pages
	include('../menu.php');
	// includes connection to php, instead of copying and pasting through the pages
	include('../db_connection.php');
	


		if(
			(isset($_POST['card_name']) && (!empty($_POST['card_name']))) &&
			(isset($_POST['category']) && (!empty($_POST['category']))) &&
			(isset($_POST['condition']) && (!empty($_POST['condition']))) &&
			(isset($_POST['finish']) && (!empty($_POST['finish']))) &&
			(isset($_POST['composition']) && (!empty($_POST['composition']))) &&
			(isset($_POST['year']) && (!empty($_POST['year']))) &&
			(isset($_POST['description']) && (!empty($_POST['description']))) &&	
			(isset($_POST['unit_price']) && (!empty($_POST['unit_price']))) &&   		
			(isset($_POST['seller_quantity']) && (!empty($_POST['seller_quantity']))) /*&& 
			 
			check for image upload. implement later if needed 

			(isset($_POST["cardimage"]) && (!empty($_POST["cardimage"])) */
		)
		{

			#get the parameter from the HTML form that this PHP program is connected to
			#since data from the form is sent by the HTTP POST action, use the $_POST array here
			//assign input in form to php variables
		
			/* card image, implement later if needed 

			$cardimage = $_POST["cardimage"]; 

			*/

			//assign php variables the user input. html and SQL sanitize the fields user type input
			$card_name = htmlspecialchars($_POST['card_name']);
			$card_name = mysqli_real_escape_string($db, $card_name);
			
			$description = htmlspecialchars($_POST['description']);
			$description = mysqli_real_escape_string($db, $description);
			
			
			$seller_quantity = htmlspecialchars($_POST['seller_quantity']);
			$seller_quantity = mysqli_real_escape_string($db, $seller_quantity);
			

			$category = htmlspecialchars($_POST['category']);
			$category = mysqli_real_escape_string($db, $category);
			
			
			$condition = htmlspecialchars($_POST['condition']);
			$condition = mysqli_real_escape_string($db, $condition);
			
		
			$finish = htmlspecialchars($_POST['finish']);
			$finish = mysqli_real_escape_string($db, $finish);
			
			$composition = htmlspecialchars($_POST['composition']);
			$composition = mysqli_real_escape_string($db, $composition);
			
			$year = htmlspecialchars($_POST['year']);
			$year = mysqli_real_escape_string($db, $year);

			$unit_price = htmlspecialchars($_POST['unit_price']);
			$unit_price = mysqli_real_escape_string($db, $unit_price);



			//insert into database with sql 
			$constructed_query = "INSERT INTO STOCK (C_NAME, C_DESC, C_QUANTITY, C_CATEG, C_CONDITION, C_FINISH, C_COMP, C_YEAR, PRICE)   
			VALUES ('$card_name', '$description', '$seller_quantity', '$category', '$condition', '$finish' , '$composition' , '$year', '$unit_price')";
			
		#sanity check: print query to see if constructued query is correct
		print("This is what is going to be executed in MySQL");
		echo ($constructed_query);

		
		#Execute query
		$result = mysqli_query($db, $constructed_query);
		
		if(!$result){
			print("Error- query could not be executed ");
			$error = mysqli_error($db); 
			print "<p> . $error. </p>"; 
			exit; 

		}
		
		

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

	
	?> 

<div class="footer">
	<p> 
		Shaheen Reid wrote this file
	</p>
</div>

</body>
</html>
