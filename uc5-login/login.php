<html>
 <body>


 <?php 
//Variables 
 $emailinvalid = "This e-mail entry is invalid, please try again. ";
 $passwordinvalid = "This e-mail entry is invalid, please try again. ";
 $email = $_POST['email'];
 $password = $_POST['password'];
 $login = "index.php";
 $homepage = "../uc1-Listings-View/ListingsView.php";
 //Checking to see if the e-mail or password is empty and exiting
    if(empty ($email || $password)){
        header('Location: '. $login);
        die;   
    }


  //Starts up a session with the E-Mail address and redirects back to homepage
  session_start ();
  $_SESSION['email'] = ('Welcome, ' . $email); 
  header('Location: '.$homepage);
        die;   
  
 ?>


</body>
 </html> 
