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

    
//Connect to DB
    $db = mysqli_connect ("192.168.254.2", "IS448", "IS448password", "samuela3");
       
       if (mysqli_connect_errno())	exit("Error - could not connect to MySQL");
       
//Selecting the email_address and password from DB
     $select = "select email_address, password from login where email_address = '$email'";  
     $result = mysqli_query($db, $select);
if (mysqli_num_rows($result) == 0) {
 header('Location: '. $homepage);
}

  
  //Checks the matching row's password and e-mail address against the user's input
  while($row = mysqli_fetch_assoc($result)) {
  if  ( (($row['email_address']) == $email) && (password_verify($password, $row['password'])) ){
   
   //Sets session variable
   $_SESSION['email'] = $email;
   header('Location: '. $homepage);
   
  } else header('Location: '. $login);
  
  }
  
  mysqli_close($db);
  die();
  
  ?>
