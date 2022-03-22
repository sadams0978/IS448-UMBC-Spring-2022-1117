<!DOCTYPE html>
<html lang="en">
<head>
  <title> New User </title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css" >
</head>

<body>
    <div class="Login_Box">
    <h1> Create a new Account: </h1>


  <form action="login.php" target="_blank" method="post">
    
    <input type="text" name="First_Name" placeholder="First Name" required >

    <input type="text" name="Last_Name" placeholder="Last Name" required >

    <input type="date" name="DOB" placeholder="Date of Birth" onfocus="(this.type='date')" onblur="(this.type='text')" required >

    <input type="email" name="email" placeholder="email-address" required >
    
    <input type="password" name="password" placeholder="Password" required minlength="8" maxlength="16"  >
    
    <input type="password" name="password_repeat" placeholder="Confirm your Password" required minlength="8" maxlength="16"  >
    <p> </p>
    
    <input type="checkbox" id="checkbox" name="checkbox" required >
    <label for="checkbox" > I agree to the Terms and Conditions </label>

    <input id="submit_button" type="submit" value="Submit">

    <h3> <a href="index.php" class = "Site_Link" > Have An Account?</a> </h3>
    <h3> <a href="change_password.html" class = "Site_Link"> Need to change your password?</a> </h3>
    <h3> <Strong> Unauthorized Access is Prohibited </strong> </h3>
    <h3> <strong> <a href="https://www.umbc.edu/policies/pdfs/UMBC%20X1.00.06%20UMBC%20Policy%20on%20Web%20Site%20Privacy%20Statement.pdf#:~:text=It%20is%20university%20policy%20that,sites%20not%20affiliated%20with%20UMBC." class = "Site_Link"> Privacy Policy</a> </strong> </h3>
      
     </form>
  </div> 
</body>
</html>
