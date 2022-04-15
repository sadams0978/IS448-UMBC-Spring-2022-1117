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
    echo ("Your Passwords don't match, please try again. " );
       die;
    }
          

    //If Passwords are empty, redirects them back to the sign in page
     if(empty ($password or $password_verify)){
        header('Location: '.$homepage);
        die;
    }


//If it's not meeting minimum requirements, alert the user of the requirements
    if(!$min_length || !$contains_uppercase || !$contains_digit || !$contains_special_char) {
    echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
     die;
    }

	include('../db_connection.php');

     //Hashing our new password
     // $hash = password_hash($password, PASSWORD_DEFAULT);



      //Selecting the email_address and password from DB
      $select = "select email_address, password from login where email_address = '$email'";  
      $update = "update login set password = '$password' where email_address = '$email'";
      $result = mysqli_query($db, $select);
      


  //Checks the matching row's password and e-mail address against the user's input
  while($row = mysqli_fetch_assoc($result)) {
        //Gets old password hash from DB and verifies the old password hash
        $db_password = $row['password'];
        $db_email = $row['email_address'];

  if  ( ($db_email == $email) && ($db_password == $password) ){

       //Updates Password after verifiying the old password is right
      if (mysqli_query($db, $update)) {
      echo "We changed your password.";
      } else {
  echo "We were unable to change your password. " . mysqli_error($db);
}   
             
        
        
  }  else echo ("You are not logged in. ");
   
  }



  mysqli_close($db);
  die();

?>
