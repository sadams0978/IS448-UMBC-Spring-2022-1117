<?php
include('../db_connection.php');
include ('../menu.php');
$userEmail = $_POST['userEmail'];
$admin = "index.php";
$delete = “DELETE FROM login WHERE email_address = ‘$userEmail’”;


if (mysqli_query($db, $delete)) {
       header('Location: '. $admin);

} else echo ("We couldn't make the change, please try again. ");


?>
