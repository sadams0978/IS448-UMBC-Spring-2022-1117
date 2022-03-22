      $password = $_POST['password'];
      $password_verify = $_POST['password_verify'];
      $passwords_match = false;
      $homepage = "login.php";
      $min_length = false;


  //Conditions
 
  $contains_uppercase = preg_match('/[A-Z]/', $password);
  
  $contains_special_chars = preg_match('/\W/', $password);
  
  $contains_digit = preg_match('/\d/', $password);
  
    if (strlen($password) > 8 ) {
    $min_length = true;
  }


    //Verifies that the verified password and passwords match and tells the user
    if ($password === $password_verify) {
      $passwords_match = true;
      echo ("Your Password Don't Match, Please Try Entering them Again");
      die;
    }

    //If Passwords are empty, redirects them back to the sign in page
     if(empty($password or $password_verify)){
        header('Location: '.$homepage);
        die;
    }



    if(!$min_lenth || !$contains_uppercase || !$contains_digit || !$contains_special_chars) {
    echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    die;
} else{
    echo 'Your password meets the criteria';
     die;
}
