<!DOCTYPE html>
<html lang="en">
<head>
  <title> Create a New User </title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css" >
  <link rel="icon" type="image/x-icon" href="../favicon.png">
  <script src="https://kit.fontawesome.com/be0f7619b0.js" crossorigin="anonymous"></script>
	<script src="visable.js"></script>
	<script src="verify.js"></script>
</head>

<body>
	<div class="password_requirements" id="password_requirements" style="visibility: hidden;" >
	
	<h3 style="color:black"> Password Requirements: </h3>
		<p id="char_req" > 8 or more characters </p>
		<p id="upper_req" > 1 Uppercase letter </p>
		<p id="digit_req" > 1 Digit </p>
		<p id="special_req" > 1 Special Character </p>
		
	</div>
	
	
    <div class="Login_Box">
    <h1> Create a new Account: </h1>

  <form action="create_user.php" method="post" onsubmit="return formCheck('newUserForm')">
    
    <input type="text" name="first_name" id="first_name" placeholder="First Name" >
    <input type="text" name="last_name" id="last_name" placeholder="Last Name">
    <input type="date" name="dob" id="dob">

    <input type="text" name="email" id="email" placeholder="email-address">
    	<button type="button" tabindex="-1" onclick="clearField()"> <i class="fa-solid fa-trash"></i> </button>
    
    <input type="password" name="password" id="password" placeholder="Password" onfocus="visible()" onblur="hide()" onkeyup="checkPassword()">
    	<button type="button" tabindex="-1" onclick="visibility(password)"> <i class="fa-solid fa-eye"></i> </button>

    <input type="password" name="password_verify" id="password_verify" placeholder="Confirm your Password">
    	<button type="button" tabindex="-1" onclick="visibility(password_verify)"> <i class="fa-solid fa-eye"></i> </button>
	  
	  <p style="font-size:8pt;"> By Continuing you agree to our Terms and Conditions and Privacy Policy </p> 
	  <p style="font-size:8pt;"> Only users 18 years old or older, may create an account.  </p> 
	<br>
	  <button type="submit" id="submit_button" > <i class="fa-solid fa-arrow-right"></i> Submit </button>
    
    
    <h3> <a href="index.php" class = "Site_Link" > Have An Account?</a> </h3>
    <h3> <a href="change_password.php" class = "Site_Link"> Need to change your password?</a> </h3>
    <h3> <strong> <a href="https://www.umbc.edu/policies/pdfs/UMBC%20X1.00.06%20UMBC%20Policy%20on%20Web%20Site%20Privacy%20Statement.pdf#:~:text=It%20is%20university%20policy%20that,sites%20not%20affiliated%20with%20UMBC." class = "Site_Link"> Privacy Policy</a> </strong> </h3>
      
     </form>
  </div>

</body>
</html>
