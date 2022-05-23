<?php
  include('../db_connection.php');
  session_start();

  $add = "../uc1-Listings-View/ListingsView.php";
  if(!in_array($_GET['C_ID'], $_SESSION['favorites'])){
    array_push($_SESSION['favorites'], $_GET['C_ID']);
    $_SESSION['message'] = 'Card added to Favorites';
  }

  header('location: '. $add);
?>
