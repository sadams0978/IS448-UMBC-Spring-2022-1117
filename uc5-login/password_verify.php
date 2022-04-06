      <?php
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
  
    if (strlen($password) > 8 ) {
    $min_length = true;
  }


    //Verifies that the verified password and passwords match and tells the user
    if ($password === $password_verify) {
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



    if(!$min_length || !$contains_uppercase || !$contains_digit || !$contains_special_char) {
    echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
 
} else{
       
       //Connect to DB and Update Password
       $db = mysqli_connect ("192.168.254.2", "IS448", "IS448password", "samuela3");
       
       if (mysqli_connect_errno())	exit("Error - could not connect to MySQL");
       
       $select = "select email_address, password from login where email_address = '$email'";
       $update = "update login set password = '$password' where email_address = '$email'";
       
       mysqli_query ($db,$update);
       mysqli_close($db);         

}

?>
