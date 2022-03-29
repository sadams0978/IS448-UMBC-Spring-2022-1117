<html>
 <body>


 <?php 
 session_start();
//Variables 
 $emailinvalid = "This e-mail entry is invalid, please try again. ";
 $passwordinvalid = "This e-mail entry is invalid, please try again. ";
 $email = $_POST['email'];
 $password = $_POST['password'];
 $login = "index.php";
 $homepage = "../uc1-Listings-View/ListingsView.php";
 //Checking to see if the e-mail or password is empty and exiting
    if(empty ($email || $password)){
        header('Location: '. $login);
        die;   
    }

$servername = "192.168.254.2";
$username = "IS448";
$password = "IS448password";
$authenticated = false;
//$sql = 'SELECT User_id, First_name, Last_name, Email_address, Password FROM User';

// Create connection
$conn = new mysqli($servername, $username, $password);

// Checks connection to DB Server
if ($conn->connect_error) {
 echo ("Cannot Connect to DB");
  die("Connection failed: " . $conn->connect_error);
}
  
 $sql = "SELECT * FROM User";
 $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["User_id"];
  }
} else {
  echo "0 results";
}
  
$conn->close();
   
   mysqli_close($conn);
  

  //Starts up a session with the E-Mail address and redirects back to homepage
  //if ($authenticated) {
  //$_SESSION['email'] = $email; 
  //header('Location: '.$homepage);
  //} else echo("You are not authenticated");
 ?>


</body>
 </html> 
