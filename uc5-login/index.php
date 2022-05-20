<!DOCTYPE html>
<html lang="en">
<head>
  <title> Login </title>
	<link rel="stylesheet" href="style.css" >
	<link rel="icon" type="image/x-icon" href="../favicon.png">
	<meta charset="UTF-8">
	<script src="https://kit.fontawesome.com/be0f7619b0.js" crossorigin="anonymous"></script>
	<script src="visable.js"></script>
	<script src="verify.js"></script>

</head>

	
<body> 
		
    <div class="Login_Box">
    <h1> Sign In: </h1>
	    
	<!-- JavaScript will be used to validate user input on this site and provide feedback to the form -->   
    <form action="index.php" method="post" onsubmit="return checkEmail()">
    
    <input type="email" name="email" id="email" placeholder="Enter Your E-Mail Here" required >  
	    
	   <button type="button" onclick="clearField()"> <i class="fa-solid fa-trash"></i> </button>

    
    <input type="password" name="password" id="userPassword" placeholder="Enter Your Password Here" required > 
	    
	<button type="button" onclick="visibility(userPassword)"> <i class="fa-solid fa-eye"></i> </button>
	    
	    <br> <br>
	    
	    <button type="submit" id="submit_button" > <i class="fa-solid fa-arrow-right"></i> Submit </button>
       </form>

      <h3> <a href="create.php" class = "Site_Link"> Create An Account</a> </h3>
      <h3> <a href="change_password.php" class = "Site_Link"> Change Your Password</a> </h3>
      <h3> Need Help? </h3>
      <h3> Contact IT at x1033 or by e-mailing samuela3@umbc.edu</h3>
      <h3> <strong> Unauthorized Access is Prohibited </strong> </h3>
      <h3> <strong> <a href="https://www.umbc.edu/policies/pdfs/UMBC%20X1.00.06%20UMBC%20Policy%20on%20Web%20Site%20Privacy%20Statement.pdf#:~:text=It%20is%20university%20policy%20that,sites%20not%20affiliated%20with%20UMBC." class = "Site_Link"> Privacy Policy</a> </strong> </h3>

	    
	    <p>
	    <a href="https://instagram.com/umbclife" target="_blank"> <i class="fa-brands fa-instagram fa-xl"></i> </a>
	    <a href="https://facebook.com/umbcpage" target="_blank"> <i class="fa-brands fa-facebook fa-xl"></i> </a>
	    <a href="https://twitter.com/UMBC" target="_blank"> <i class="fa-brands fa-twitter fa-xl"></i> </a>
	    </p>

</div>
	
	 <?php 
 session_start();
//Variables 
 $email = htmlspecialchars($_POST['email']);
 $password = htmlspecialchars($_POST['password']);
 $login = "index.php";
 $homepage = "../uc1-Listings-View/ListingsView.php";
 //Checking to see if the e-mail or password is empty and exiting
if (empty($email) or empty($password)) {
        die;
}

	include('../db_connection.php');


	//Prevents Against SQL Injection
	$email =  mysqli_real_escape_string($db, $email);
    	$password =  mysqli_real_escape_string($db, $password);
    


//Selecting the email_address and password from DB
     $select = "select email_address, password from login where email_address = '$email'";  
     $result = mysqli_query($db, $select);
if (mysqli_num_rows($result) == 0) {
 	  echo ("The Username or Password is incorrect. Please Try again");
	  mysqli_close($db);
	die;
	
	
}

  
  //Checks the matching row's password and e-mail address against the user's input
  while($row = mysqli_fetch_assoc($result)) {
   $db_password = $row['password'];
   $db_email = $row['email_address'];
   
  if  ( ($db_email == $email) && ($db_password == $password) ){
   
	$selectGroup = "select Member from login where email_address = '$email'"; 
	
	//Looking through the result and setting the group session variable to it
	$group_result = mysqli_query($db,$selectGroup);
	$group_row = mysqli_fetch_row($group_result);
	  
   	//Sets session variables
	  $_SESSION['email'] = $email;
	  $_SESSION['group'] = $group_row[0];
	
   	header('Location: '. $homepage);
   
  } else 
	 echo ("The Username or Password is incorrect. Please Try again");
	  mysqli_close($db);
	die;
  
  }
  
  mysqli_close($db);
  die();
  
  ?>

  
</body>

</html>
