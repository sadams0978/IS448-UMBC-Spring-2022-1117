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


  <form action="create.php" method="post">
    
    <input type="text" name="first_name" placeholder="First Name" required >

    <input type="text" name="last_name" placeholder="Last Name" required >

    <input type="date" name="dob" placeholder="Date of Birth" onfocus="(this.type='date')" onblur="(this.type='text')" required >

    <input type="email" name="email" placeholder="email-address" required >
    
    <input type="password" name="password" placeholder="Password" required >
    
    <input type="password" name="password_verify" placeholder="Confirm your Password" required  >
    <p> </p>
    
    <input type="checkbox" id="checkbox" name="checkbox" required >
    <label for="checkbox" > I agree to the Terms and Conditions </label>

    <input id="submit_button" type="submit" value="Submit">

    <h3> <a href="index.php" class = "Site_Link" > Have An Account?</a> </h3>
    <h3> <a href="change_password.php" class = "Site_Link"> Need to change your password?</a> </h3>
    <h3> <Strong> Unauthorized Access is Prohibited </strong> </h3>
    <h3> <strong> <a href="https://www.umbc.edu/policies/pdfs/UMBC%20X1.00.06%20UMBC%20Policy%20on%20Web%20Site%20Privacy%20Statement.pdf#:~:text=It%20is%20university%20policy%20that,sites%20not%20affiliated%20with%20UMBC." class = "Site_Link"> Privacy Policy</a> </strong> </h3>
      
     </form>
  </div>
  
  
        <?php
      
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $dob = $_POST['dob'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $password_verify = $_POST['password_verify'];
      $passwords_match = false;
      $homepage = "index.php";
      $min_length = false;


  //Conditions
 
  $contains_uppercase = preg_match("/[A-Z]+/", $password);
  
  $contains_special_char = preg_match("/\W+/", $password);
  
  $contains_digit = preg_match("/\d+/", $password);
  
//Minimum length of 8 chars
    if (strlen($password) > 8 ) {
    $min_length = true;
  }


    //Verifies that the verified password and passwords match and tells the user
    if ($password == $password_verify) {
      $passwords_match = true;
      
    } else {
    echo ("Your Passwords don't match, please try again. " );
       die;
    }
          

    //If Passwords are empty, redirects them back to the sign in page
     if(empty($password or $password_verify)){
        header('Location: '.$homepage);
        die;
    }


//If it's not meeting minimum requirements, alert the user of the requirements
    if(!$min_length || !$contains_uppercase || !$contains_digit || !$contains_special_char) {
    echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
     die;
    }
  
  


      //Connect to DB to verify old password
    $db = mysqli_connect ("192.168.254.2", "IS448", "IS448password", "samuela3");
    if (mysqli_connect_errno())	exit("Error - could not connect to MySQL");
       

     //Hashing our new password
      $hash = password_hash($password, PASSWORD_DEFAULT);



      //Insert user data to DB
      $insert = "INSERT INTO login (email_address, first_name, last_name, date_of_birth, password) VALUES ('$email', '$first_name', '$last_name', '$dob', '$hash')";

          
        if (mysqli_query($db, $insert)) {
    //Sets session variable
   $_SESSION['email'] = $email;
   header('Location: '. $homepage);
    
          
          
    } else {
  echo "Error: There was an issue with creating the new user, please try again later. ";
}


  mysqli_close($db);
  die();

?>

  
</body>
</html>
