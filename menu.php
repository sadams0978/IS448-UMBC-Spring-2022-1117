	
<!--Please update any menu bar entries here, as this will be included on all pages through PHP -->
<div class="titlebar" >  
<p class="login"> <?php 
	$login = "/uc5-login/index.php";
	session_start(); 
	if(!isset ($_SESSION['email'])){
		header('Location: '. $login); 
	}
	
	
	
	
	
	
	
	
	echo ($_SESSION['email']) ?> <a href="../uc4-Seller-listing/usecase4.php"> <i class="fa-solid fa-cart-shopping"></i> </a> </p>
	<!--link to shopping cart and sign in pages-->
	<p class="spacer"></p>
		<ul class="header">
			<li><a href="../index.html">Home</a></li>
			<li><a href="../uc2-favorites/case2.php">Favorite Cards</a></li>
			<li><a href="../uc3-purchasing/card-details-Andrew-part3.php">Purchasing</a></li>
			<li><a href="../uc5-login/index.php">Login</a></li>
  			<div class="search"><li><input type="text" name="Search" /> <button type="submit">Search</button></li></div>
		</ul>
	</div>
