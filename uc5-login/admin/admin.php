 <?php
include('../menu.php');
include('../db_connection.php');

    //Selecting the email_address and password from DB
      $select = "select * from login";
      $result = mysqli_query($db, $select);
      

  while($row = mysqli_fetch_assoc($result)) {

        $db_email = $row['email_address']; 
	echo ($db_email);   
  }  


  mysqli_close($db);
  die();

?>

