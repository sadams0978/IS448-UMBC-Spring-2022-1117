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
       
     $result = mysqli_query($db, $select);
  
  //Keep on creating new rows in our table from our result
  while($row = mysqli_fetch_assoc($result)) {
  echo ($row['email_address']); 
  echo ($row['password']);
  }

  
  
 
  mysqli_close($db);
 
  
  ?>


</body>
 </html> 
