<?php
  session_start();

  if(!in_array($_GET['C_ID'], $_SESSION['favorites'])){
    array_push($_SESSION['favorites'], $_GET['C_ID']);
    $_SESSION['message'] = 'Card added to Favorites';
  }else {
    $_SESSION['message'] = 'Card already in Favorites' 
  }

  header('location: ../uc1-Listings-View/ListingsView.php');
?>
