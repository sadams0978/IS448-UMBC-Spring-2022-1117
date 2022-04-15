<!doctype html>
<html lang ="en">
<head>
<meta charset="utf-8">


<link rel="stylesheet" type="text/css" href="root.css"/>
<link rel="stylesheet" type="text/css" href="usecase4.css"/>
<script src="https://kit.fontawesome.com/be0f7619b0.js" crossorigin="anonymous"></script>

	
<title>Post Listing</title>

</head>
<body>

<?php
    // Includes our menu bar, instead of copying and pasting through the pages
include('../menu.php');
?>
<form action="usecase4-submissionpage.php" method="POST">
	
  <!-- seller enters picture for card listing--> 
  <div class="left">
    <p class="card"><img src="../uc2-favorites/blank-card.jpg" alt="Playing Card image"  width = "300" height = "400"/></p>
    
        <input type="file" id="myFile" name="cardimage">

  </div>	

  <div class="right">
    

    <!-- Upper box containing text boxes and dropdowns for card infomrmation--> 
    <div class ="cardDetailsContainer"> 

    <!--Enter card name text box--> 
    
    <label for ="card_name"> Card Name: </label>
        <input type="text" name="card_name" id= "card_name" size ="16" placeholder="Card Name" > 
      

      <!--Enter card category dropdown --> 
      <label for="category"> Category:</label> <!--from sql & php-->
        <select name= "category" id="category"> 
          <option value="" disabled selected>Select your option</option> <!-- acts as place holder prior to user interacting with element--> 
          <option value=”1”>Pokémon</option>
          <option value=”2”>Yu Gi Oh</option>
          <option value=”3”>Baseball</option>
          <option value=”4”>Football</option>
          <option value=”4”>Other</option>
        </select>
      
      <!--Enter card condition dropdown--> 
      <label for="condition"> Condition:</label> <!--from sql & php-->
        <select name= "condition" id="condition"> 
          <option value="" disabled selected>Select your option</option>
          <option value=”1”>Poor</option>
          <option value=”2”>Average</option>
          <option value=”3”>Great</option>
          <option value=”4”>Mint</option>
        </select>

      <br/> 
      

      <!--Enter card finish dropdown--> 
      <label for="finish"> Finish:</label> <!--from sql & php-->
        <select name= "finish" id="finish"> 
          <option value="" disabled selected>Select your option</option>
          <option value=”1”>Matte</option>
          <option value=”2”>Satin</option>
          <option value=”3”>Gloss</option>
          <option value=”4”>Other</option>
        </select>

      <!-- Enter card composition dropdown--> 
        <label for="composition"> Composition:</label> <!--from sql & php-->
        <select name= "composition" id="composition"> 
          <option value="" disabled selected>Select your option</option>
          <option value=”1”>paperboard</option>
          <option value=”2”>thick paper</option>
          <option value=”3”>plastic</option>
          <option value=”4”>metal</option>
          <option value=”5”>other</option>

        </select>

      <!--Enter card year text box--> 
    
        <label for ="year"> Year </label>
        <input type="text" name="year" id= "year" size ="4" placeholder="Year" minlength="4" maxlength ="4" > <!--ensures that a year in four digit form e.g. 1999 is entered--> 
      

    </div>
    

    <!-- lower box containing a big text box for user to provide more specific/writtn outdetails about the card --> 

    <div class ="cardDetailsContainer"> 

        <textarea name = "description" id="description" rows="15" cols = "79" required>
        </textarea>
      
    </div>



      
    <div class="pricing">
      <!--pricing information-->
      
        <label for ="unitprice"> Price per unit:</label>
        <input type="text" id="unitprice" class ="priceandquantity" size ="7">
      

      <!--quantity information--> 
      
        <label for ="sellerquantity"> Quantity:</label>
        <input type="text" id="sellerquantity" class ="priceandquantity" size ="7" maxlength ="4">
      

      
      <!-- button for seller to post listing 
      <p><button type="submit">Post listing</button> </p>
      --> 

    <input type = "submit" value = "Post Listing"/>
    </div>

  </div>

</form>

<div class="footer">

	<p> 
		Shaheen Reid wrote this file
	</p>
</div>


</body>
</html>
