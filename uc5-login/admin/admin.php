 <?php
include('../menu.php');
include('../db_connection.php');

    //Selecting the email_address and password from DB
      $select = "select * from login";
      $result = mysqli_query($db, $select);
      


  //Checks the matching row's password and e-mail address against the user's input
  while($row = mysqli_fetch_assoc($result)) {
        $db_first_name = $row['first_name'];
	$db_last_name = $row['last_name'];
        $db_email = $row['email_address']; 
	echo ("The First Name is: " . $db_first_name);
	echo ("The Last Name is: " . $db_last_name);
	echo ("The Email is: " . $db_email);   
  }  



  mysqli_close($db);
  die();

?>

