 <?php 
 session_start();
//Variables 
 $emailinvalid = "This e-mail entry is invalid, please try again. ";
 $passwordinvalid = "This e-mail entry is invalid, please try again. ";
 $email = htmlspecialchars($_POST['email']);
 $password = htmlspecialchars($_POST['password']);
 $login = "index.php";
 $homepage = "../uc1-Listings-View/ListingsView.php";
 //Checking to see if the e-mail or password is empty and exiting
if (empty($email) or empty($password)) {
       header('Location: '. $login);
        die;
}

	include('../db_connection.php');


	//Prevents Against SQL Injection
	$email =  mysqli_real_escape_string($db, $email);
    	$password =  mysqli_real_escape_string($db, $password);
    


//Selecting the email_address and password from DB
     $select = "select email_address, password from login where email_address = '$email'";  
     $result = mysqli_query($db, $select);
if (mysqli_num_rows($result) == 0) {
 header('Location: '. $homepage);
}

  
  //Checks the matching row's password and e-mail address against the user's input
  while($row = mysqli_fetch_assoc($result)) {
   $db_password = $row['password'];
   $db_email = $row['email_address'];
   
  if  ( ($db_email == $email) && ($db_password == $password) ){
   
	$selectGroup = "select Member from login where email_address = '$email'"; 
	
	//Looking through the result and setting the group session variable to it
	$group_result = mysqli_query($db,$selectGroup);
	$group_row = mysqli_fetch_row($group_result);
	  
   	//Sets session variables
	  $_SESSION['email'] = $email;
	  $_SESSION['group'] = $group_row[0];
	
   header('Location: '. $homepage);
   
  } else header('Location: '. $login);
  
  }
  
  mysqli_close($db);
  die();
  
  ?>
