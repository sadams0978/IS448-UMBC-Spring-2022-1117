<!DOCTYPE html>
<html lang="en">
<head>
  <title> Create a New User </title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css" >
  <link rel="icon" type="image/x-icon" href="../favicon.png">
  <script src="https://kit.fontawesome.com/be0f7619b0.js" crossorigin="anonymous"></script>
	<script src="visable.js"></script>
</head>

<body>
    <div class="Login_Box">
    <h1> Create a new Account: </h1>


  <form action="create_user.php" method="post">
    
    <input type="text" name="first_name" placeholder="First Name" required >

    <input type="text" name="last_name" placeholder="Last Name" required >

    <input type="date" name="dob" placeholder="Date of Birth" required >

    <input type="email" name="email" id="email" placeholder="email-address" required >
    <button type="button" onclick="clearField()"> <i class="fa-solid fa-trash"></i> </button>

    
    <input type="password" name="password" id="password" placeholder="Password" >
    	<button type="button" onclick="visibility(password)"> <i class="fa-solid fa-eye"></i> </button>

    
    <input type="password" name="password_verify" id="password_verify" placeholder="Confirm your Password" required  >
    	<button type="button" onclick="visibility(password_verify)"> <i class="fa-solid fa-eye"></i> </button>
	  
	  <p style="font-size:8pt;"> By Continuing you agree to our Terms and Conditions and Privacy Policy </p> 

	  <br>
	    <button type="submit" id="submit_button" > <i class="fa-solid fa-arrow-right"></i> Submit </button>
    
    
    <h3> <a href="index.php" class = "Site_Link" > Have An Account?</a> </h3>
    <h3> <a href="change_password.php" class = "Site_Link"> Need to change your password?</a> </h3>
    <h3> <Strong> Unauthorized Access is Prohibited </strong> </h3>
    <h3> <strong> <a href="https://www.umbc.edu/policies/pdfs/UMBC%20X1.00.06%20UMBC%20Policy%20on%20Web%20Site%20Privacy%20Statement.pdf#:~:text=It%20is%20university%20policy%20that,sites%20not%20affiliated%20with%20UMBC." class = "Site_Link"> Privacy Policy</a> </strong> </h3>
      
     </form>
  </div>
  
    <script src="verify.js"></script>

</body>
</html>
