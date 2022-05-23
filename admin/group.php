<!DOCTYPE html>
<html lang ="en">
	
	
<head>
	
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../root.css"/>
	<script src="https://kit.fontawesome.com/be0f7619b0.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js"></script>
	<script src="delete.js"></script>

    <title>Admin</title>
</head>
<body>
	
<?php 

//Only Authorized Users can access this admin page
	include('../menu.php');
	$home = "../";	
	

	//If Group isn't set redirect to sign in page
	if(!isset ($_SESSION['group'])){
	header('Location: '. $home);
	}

	
	//If the group is just user, tell the user that they are unauthorized
  	if ($_SESSION['group'] == 'admin') {
	changeGroup();	
	
	} else {
   	echo ("Unauthorized, please try again!");
	die;
      
    }



function changeGroup() {
    $email = $_POST['email'];
    $group = $_POST['group'];

    include('../db_connection.php');
	  $update = "UPDATE login SET Member = '$group' WHERE email_address = '$email'";

	  mysqli_query($db, $update);
	  mysqli_close($db);
  
  
}
	
	
	?>
	
</body>
</html>
	
