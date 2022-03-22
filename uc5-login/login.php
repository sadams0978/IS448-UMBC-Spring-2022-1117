<html>
 <body>


 <?php 
//Variables 
 $emailinvalid = "This e-mail entry is invalid, please try again. ";
 $passwordinvalid = "This e-mail entry is invalid, please try again. ";
 $email = $_POST['email'];
 $password = $_POST['password'];
 $homepage = "https://swe.umbc.edu/~samuela3/login";


 //Checking to see if the e-mail or password is empty and exiting
    if(empty ($email || $password)){
        header('Location: '.$homepage);
        die;   
    }


  session_start ();
  
  $_SESSION['email'] = ('Welcome, ' . $email); 
  
  
  echo $_SESSION['email'];
 ?>


</body>
 </html> 
