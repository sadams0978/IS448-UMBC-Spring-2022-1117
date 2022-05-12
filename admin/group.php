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
     header('HTTP/1.0 401 Unauthorized');
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
