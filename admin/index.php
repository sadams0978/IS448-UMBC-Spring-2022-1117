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

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr
	{
		background-color: honeydew;
	}


#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>


<?php
	include('../menu.php');
	$login = "../uc5-login/index.php";

	//If User Group isn't set redirect to sign in page
	if(!isset ($_SESSION['group'])){
	header('Location: '. $login);
	}

	//If the group is just user, tell the user that they are unauthorized
  	if ($_SESSION['group'] == 'user') {
	echo ("Unauthorized, please try again!");
	 die;
  	}

	//User Group is either admin or viewer
	
	//Querying the DB for login info
	include('../db_connection.php');

	$constructed_query = "SELECT email_address, first_name, last_name, date_of_birth, Member FROM login;";
	$result = mysqli_query($db, $constructed_query);

	$num_rows = mysqli_num_rows($result);

		if ($num_rows == 0) {
		echo ("There are no users, please check the MySQL Connection");
		die;	
		}
?>

	<h3> Users </h3>
	
	<table id="customers"> <tr>
	<th> <i class="fa-solid fa-inbox"></i>  E-Mail Address </th>
	<th> First Name </th>
        <th> Last Name </th>
	<th> Date of Birth </th>
	<th> <i class="fa-solid fa-delete-left"></i> Delete User </th>
	<th> Change User Permissions </th>
	</tr>


		
     <?php
		
	while($db_row = mysqli_fetch_array($result)) {
		
		$group = $db_row['Member'];
		if ($group == "user") {
		$second = "viewer";
		$third = "admin";	
			
		} else if ($group == "viewer") {
		$second = "user";
		$third = "admin";
			
			
		} else {
		$second = "user";	
		$third = "viewer";	
		}
		  
		  print("<tr>");
		print("<td> $db_row[email_address] </td>	
			<td>$db_row[first_name]</td>
			<td>$db_row[last_name]</td> 
			<td>$db_row[date_of_birth]</td> 
			<td><button id='$db_row[email_address]' onclick='buttonPressed(this)' > Delete </button></td>
			
			<td> 
			<select id='$db_row[email_address]' onChange='changeGroup(this)'>
			
			<option value='$group' selected > $group </option>
           		<option value='$second' > $second</option>
            		<option value='$third' > $third </option>
      			
			</select>
  			</td>");
		      

		
		  print("</tr>");
	}
		
		mysqli_close($db);
	
		?>
		

		</table>
	
	
	<form method="post" action="delete.php" id="submitForm">
		<input type="hidden" name="userEmail" id="userEmail" value="Test">
		</form>

	
	
</body>
</html>
