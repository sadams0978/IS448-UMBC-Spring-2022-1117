 <?php
include('../menu.php');
include('../db_connection.php');
$select = "select email_address, first_name, last_name from login"; 
$result = mysqli_query($db, $select);
?>
	<h3> Users </h3>        
        <?php
  	while($row = mysqli_fetch_assoc($result)) {
        echo($row['email_address']);
        echo($row['first_name']);
	echo($row['last_name']);
	}

  	mysqli_close($db);
  	die();
?>
