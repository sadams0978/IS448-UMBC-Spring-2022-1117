<?php
include('../db_connection.php');
include ('../menu.php');
$userEmail = $_POST['userEmail'];
$admin = "index.php";
$delete = "DELETE FROM login WHERE email_address = '$userEmail'";

mysqli_query($db, $delete);
header('Location: '. $admin);
mysqli_close($db);


?>
