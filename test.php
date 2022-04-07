<?php
  
  // The plain text password to be hashed
  $plaintext_password = "password";
  
  // The hash of the password that
  // can be stored in the database
  $hash = ("$2y$10$YBfhBfC.F7bK7pMA1QX0EOUM9zBmnNv2KGFAEn1T95oxHNtye0bbW");
  // Print the generated hash



  // Verify the hash against the password entered
  $verify = password_verify($plaintext_password, $hash);
  
  // Print the result depending if they match
  if ($verify) {
      echo 'Password Verified!';
  } else {
      echo 'Incorrect Password!';
  }
?>
