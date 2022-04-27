<!doctype html>
<html lang ="en">
<head>
    
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../root.css"/>
    <script src="https://kit.fontawesome.com/be0f7619b0.js" crossorigin="anonymous"></script>

    <title>Admin</title>
</head>
<body>

<?php
	include ('../menu.php');
	include('../db_connection.php');

	$constructed_query = "SELECT email_address, first_name, last_name FROM login;";
	$result = mysqli_query($db, $constructed_query);

	$num_rows = mysqli_num_rows($result);

		if ($num_rows == 0) {
		echo ("There are no users, please check the MySQL Connection");
		die;	
		}
?>

	<h3> Users </h3>
	
	<table border="2"> <tr>
	<th> E-Mail Address </th>
	<th> First Name </th>
        <th> Last Name </th>
	<th> Delete User </th>
	</tr>

     <?php
	  while($db_row = mysqli_fetch_array($result)) {
		print("<tr>");
		print("<td> $db_row[email_address] </td>	
			<td>$db_row[first_name]</td>
			<td>$db_row[last_name]</td> "
		  <td><a href='delete.php?email={$db_row[email_address]}'>Delete</a></td>);
		print("</tr>");
	}
		mysqli_close($db);
		die;
		?>

		</table>
	</body>
