<!DOCTYPE html>
<html lang="en">
<head>
  <title> Create a New User </title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css" >
  <link rel="icon" type="image/x-icon" href="../favicon.png">
  <script src="https://kit.fontawesome.com/be0f7619b0.js" crossorigin="anonymous"></script>
</head>

<body>

	
	
    <div class="Login_Box">
	    


<?php
      $email = htmlspecialchars($_POST['email']);
      $old_password = htmlspecialchars($_POST['old_password']);
      $password = htmlspecialchars($_POST['password']);
      $password_verify = htmlspecialchars($_POST['password_verify']);
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
    echo ("<h1> Your Passwords don't match, please try again. </h1>" );
       die;
    }
          

    //If Passwords are empty, redirects them back to the sign in page
   if (empty($password_verify) or empty($password)) {
       header('Location: '. $login);
        die;
}


//If it's not meeting minimum requirements, alert the user of the requirements
    if(!$min_length || !$contains_uppercase || !$contains_digit || !$contains_special_char) {
    echo (" <h1> Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character </h1> ");
     die;
    }

	include('../db_connection.php');

     //Hashing our new password
     // $hash = password_hash($password, PASSWORD_DEFAULT);



	//Prevents Against SQL Injection
	$email =  mysqli_real_escape_string($db, $email);
    	$password =  mysqli_real_escape_string($db, $password);


      //Selecting the email_address and password from DB
      $select = "select email_address, password from login where email_address = '$email'";  
      $update = "update login set password = '$password' where email_address = '$email'";
      $result = mysqli_query($db, $select);
      


  //Checks the matching row's password and e-mail address against the user's input
  while($row = mysqli_fetch_assoc($result)) {
        //Gets old password hash from DB and verifies the old password hash
        $db_password = $row['password'];
        $db_email = $row['email_address'];

  if  ( ($db_email == $email) && ($db_password == $old_password) ){

       //Updates Password after verifiying the old password is right
      if (mysqli_query($db, $update)) {
      echo "<h1> We changed your password. </h1> ";
      } else {
  echo "<h1> We were unable to change your password. </h1>" . mysqli_error($db);
}   
             
        
        
  }  else echo (" <h1> Please check your email address or password, and try again.  </h1> ");
   
  }



  mysqli_close($db);
  die();

?>
	    
<h3> <a href="index.php"> Click Here to sign in </a> </h3>
</div>

</body>
</html>
