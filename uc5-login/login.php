<html>
 <body>
 <?php 
 session_start();
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

    $db = mysqli_connect ("192.168.254.2", "IS448", "IS448password", "samuela3");
       
       if (mysqli_connect_errno())	exit("Error - could not connect to MySQL");
       
       $select = "select email_address, password from login where email_address = '$email'";
       
  
       $result = mysqli_query ($db,$select);
       
      //if we have one row, then check the password, else give an error with a non-matching e-mail
       if (mysqli_num_rows($result) == 1) {
           while($row = mysqli_fetch_assoc($result)) {
             //Comparing our row value vs the user value
             if ($row["password"] == $password) {
              echo ("You are signed into the Website");
                   
             } else {
              echo ("Incorrect Password Given, please try again");     
             }
       }
      } else {
  echo ("We didn't find a matching e-mail address");
}
          
          
       mysqli_close($db);      
 
  
  
  
  ?>


</body>
 </html> 
