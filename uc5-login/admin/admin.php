 <?php
include('../menu.php');
include('../db_connection.php');
$constructed_query = "select email_address, first_name, last_name FROM login;";
echo ($constructed_query);
$result = mysqli_query($db, $constructed_query);
echo ($result);
?>

	<h3> Users </h3>
	<table border="2">
	<tr>
		<th> E-Mail Address </th>
		<th> First Name </th>
        	<th> Last Name </th>
	</tr>
        
        <?php
	  while($db_row = mysqli_fetch_array($result))	{
		print("<tr>");
		print("<td>
		
			$db_row[email_address] </td>
			<td>$db_row[first_name]</td>
 	      		<td>$db_row[last_name]</td> 
      ");
	print("</tr>");
	}		
}
?>
        
</table>
