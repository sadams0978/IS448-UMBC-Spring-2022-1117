<?php 
	include('../menu.php');
	if(!isset ($_SESSION['testing_variable'])){
		 $_SESSION['testing_variable'] = 'This is a test variable. ';
	}
	echo ("</br>");
  echo ("Welcome, " . $_SESSION['testing_variable']); 
  ?> 
