  <?php
  //Connect to DB this will be utilized in several sites
    $db = mysqli_connect ("192.168.254.2", "IS448", "IS448password", "samuela3");
    if (mysqli_connect_errno())	exit("Error - could not connect to MySQL");
?>
