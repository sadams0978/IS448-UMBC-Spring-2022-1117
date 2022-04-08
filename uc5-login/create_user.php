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
  
		// Includes our Database Connection Details
    	$db = mysqli_connect ("192.168.254.2", "IS448", "IS448password", "samuela3");
   	if (mysqli_connect_errno())	exit("Error - could not connect to MySQL");

     //Hashing our new password
      $hash = password_hash($password, PASSWORD_DEFAULT);

	//Querying our DB to see if someone already has that e-mail address	
	$email_verification = ("SELECT email_address FROM login WHERE email-address = '$email'");
	$email_result = mysqli_query($db,$email_verification);
	$email_rows=mysqli_num_rows($email_result);
	if($email_rows !== 0) {
    	echo ("We already have a user with the e-mail address " . $email . ", please try again later.");
        die;
	
	}

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
