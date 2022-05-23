	
<!--Please update any menu bar entries here, as this will be included on all pages through PHP -->
<div class="titlebar" >  
<p class="login"> <?php 
	$login = "../uc5-login/index.php";
	session_start(); 
	if(!isset ($_SESSION['email'])){
		header('Location: '. $login); 
	}
	echo ("Welcome, " . $_SESSION['email']); 
	
	if ($_SESSION['group'] == 'user') {
	 ?>
		<style type="text/css">
			#adminLink {
			display:none;
				} </style>
	<?php
  	}
	
	?> 
	<a href="../uc4-Seller-listing/usecase4.php"> <i class="fa-solid fa-cart-shopping"></i> </a> </p>
	<!--link to shopping cart and sign in pages-->
	<p class="spacer"></p>
		<ul class="header">
			<li><a href="../index.html">Home</a></li>
			<li><a href="../uc2-favorites/case2.php">Favorite Cards</a></li>
			<li><a href="../uc3-purchasing/card-details-Andrew-part3.php">Purchasing</a></li>
			<li id="adminLink"><a href="../admin">Admin</a></li>
			<li><a href="../uc5-login/logout.php">Logout</a></li>
  			 <!--<div class="search"><li><input type="text" name="Search" /> <button type="submit">Search</button></li></div> -->
		</ul>
	</div>
