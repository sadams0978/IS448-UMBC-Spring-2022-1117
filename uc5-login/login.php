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
$sql = 'SELECT User_id, First_name, Last_name, Email_address, Password FROM User';


// Create connection
$conn = new mysqli($servername, $username, $password);

// Checks connection to DB Server
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  
  
   mysql_select_db('IS448');
   $retval = mysql_query( $sql, $conn );
  
  
  
  echo ($retval);
  
  

  //Starts up a session with the E-Mail address and redirects back to homepage
  if ($authenticated) {
  $_SESSION['email'] = $email; 
  header('Location: '.$homepage);
   
   
  } else echo("You are not authenticated");
 ?>


</body>
 </html> 
