 <?php
include('../../db_connection.php');

    //Selecting the email_address and password from DB
      $select = "select * from login;";
      $result = mysqli_query($db, $select);
	$rows = mysqli_num_rows($result);
if ($rows > 0) {
while($row = mysqli_fetch_assoc($result)) {
        echo $row['email_address']; 
  }  	
	
	
}
      
  mysqli_close($db);
  die();

?>

