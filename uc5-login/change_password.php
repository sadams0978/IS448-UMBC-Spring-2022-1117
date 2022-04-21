<!DOCTYPE html>
<html lang="en">
<head>
  <title> Change Your Password</title>
  <link rel="icon" type="image/x-icon" href="../favicon.png">
  <link rel="stylesheet" href="style.css" >
  <meta charset="UTF-8">
</head>

<body>
    <div class="Login_Box">

    <h1> Change Your Password: </h1>
    <form action="password_update.php" target="_blank" method="post">
    
    <input type="email" name="email" placeholder="email-address" required autofocus >
    
    <input type="password" name="old_password" placeholder="Existing Password:" required>
    
    <input type="password" name="password" placeholder="New Password:" required>
    
    <input type="password" name="password_verify" placeholder="Verify your New Password:" required >

    <input id="submit_button" type="submit" value="Submit">        
     
      
    <h3> <a href="create.php" class = "Site_Link"> Create An Account</a> </h3>
    <h3> <a href="index.php" class = "Site_Link"> Log In</a> </h3>
    <h3> Need Help? </h3>
    <h3> Contact IT at x1033 or by e-mailing samuela3@umbc.edu</h3>
    <h3> <strong> Unauthorized Access is Prohibited </strong> </h3>
    <h3> <strong> <a href="https://www.umbc.edu/policies/pdfs/UMBC%20X1.00.06%20UMBC%20Policy%20on%20Web%20Site%20Privacy%20Statement.pdf#:~:text=It%20is%20university%20policy%20that,sites%20not%20affiliated%20with%20UMBC." class = "Site_Link"> Privacy Policy</a> </strong> </h3>
   </form>
  </div>
</body>
</html>
