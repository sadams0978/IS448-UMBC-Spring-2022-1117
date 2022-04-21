<?php
include('../../db_connection.php');
$constructed_query = "SELECT email_address, first_name, last_name, FROM login";

$result = mysqli_query($db, $constructed_query);

		if(! $result){
			print("There are no users, please check the MySQL Connection");
			die;
		}


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
	</tr>

        <?php
	  while($db_row = mysqli_fetch_array($result)) {
		print("<tr>");
		print("<td> $db_row[email_address] </td>	
			<td>$db_row[first_name]</td>
			<td>$db_row[last_name]</td> ");
		print("</tr>");
	}		
		mysqli_close($db);
		die;
		?>

</table>
