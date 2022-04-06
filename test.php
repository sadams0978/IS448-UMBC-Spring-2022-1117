<?php
$servername = "studentdb-maria.gl.umbc.edu";
$username = "samuela3";
$password = "samuela3";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
