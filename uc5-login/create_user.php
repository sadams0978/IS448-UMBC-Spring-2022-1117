       <?php
      
      $first_name = htmlspecialchars($_POST['first_name']);
      $last_name = htmlspecialchars($_POST['last_name']);
      $dob = htmlspecialchars($_POST['dob']);
      $email = htmlspecialchars($_POST['email']);
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
    echo ("Your Passwords don't match, please try again. " );
       die;
    }
          

	

//If Passwords are blank, redirect to login page
if (empty($password_verify) or empty($password)) {
       header('Location: '. $login);
        die;
}


//If it's not meeting minimum requirements, alert the user of the requirements
    if(!$min_length || !$contains_uppercase || !$contains_digit || !$contains_special_char) {
    echo ('Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.');
     die;
    }


	//checking that the user is 18 years old

	if (time() < strtotime('+18 years', strtotime($dob))) {
   		echo ("You need to be at least 18 years old to create an account");
   	exit;
	}


	include('../db_connection.php');

     //Hashing our new password
     // $hash = password_hash($password, PASSWORD_DEFAULT);

	//Prevents Against SQL Injection
	$email =  mysqli_real_escape_string($db, $email);
    	$password =  mysqli_real_escape_string($db, $password);
	$dob =  mysqli_real_escape_string($db, $dob);
    	$first_name =  mysqli_real_escape_string($db, $first_name);
	$last_name =  mysqli_real_escape_string($db, $last_name);


	//Querying our DB to see if someone already has that e-mail address	
	$email_verification = ("SELECT email_address FROM login WHERE email_address = '$email'");
	$email_result = mysqli_query($db,$email_verification);
	$email_rows=mysqli_num_rows($email_result);
	if($email_rows !== 0) {
    	echo ("We already have a user with the e-mail address " . $email . ", please try again later.");
        die;
	
	}

      //Insert user data to DB
      $insert = "INSERT INTO login (email_address, first_name, last_name, date_of_birth, password) VALUES ('$email', '$first_name', '$last_name', '$dob', '$password')";

          
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
