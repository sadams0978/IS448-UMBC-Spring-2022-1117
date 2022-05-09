<!DOCTYPE html>
<html lang="en">
<head>
  <title> Login </title>
	<link rel="stylesheet" href="style.css" >
	<link rel="icon" type="image/x-icon" href="../favicon.png">
	<meta charset="UTF-8">
	<script src="visibility.js"></script>
	<script src="https://kit.fontawesome.com/be0f7619b0.js" crossorigin="anonymous"></script>
</head>

	
<body>  
    <div class="Login_Box">
    <h1> Sign In: </h1>
	    
	<!-- JavaScript will be used to validate user input on this site and provide feedback to the form -->   
    <form action="login.php" method="post">
    
    <input type="email" name="email" placeholder="Enter Your E-Mail Here" required > <i class="fa-solid fa-trash"></i>
    
    <input type="password" name="password" id="password" placeholder="Enter Your Password Here" required > 
	    
	<button onclick="changepassword()">Unhide</button>

	    

	    <br> 
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
  
</body>

</html>
