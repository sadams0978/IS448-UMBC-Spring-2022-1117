<?php
  
  // Plaintext password entered by the user
  $plaintext_password = "Password123!";
  
$hash = password_hash($plaintext_password, 
          PASSWORD_DEFAULT);
  
  // Print the generated hash
  echo "Generated hash: ".$hash;

?>
