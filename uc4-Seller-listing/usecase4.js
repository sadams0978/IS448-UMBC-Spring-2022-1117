"use strict";

window.onload = pageLoad; 
function pageLoad(){
	


	document.getElementById("biggerTextB").onclick=increaseTextSize;
	document.getElementById("smallerTextB").onclick=decreaseTextSize;

	//document.getElementById("submitB").onclick = checkForm; 
	document.getElementById("year").onblur = checkForm; 


	//to test if placeholders are stored into vars
	//document.getElementById("category").onblur = checkCat; 

}

//modifies the text size within the text box to increase 
function increaseTextSize() { 
	var tarea = document.getElementById("description");
	tarea.style.fontSize = "24pt";
}

//modifies the text size within the text box to decrease 
function decreaseTextSize() { 
	var tarea = document.getElementById("description");
	tarea.style.fontSize = "10pt"; 
}


function checkForm() {

	//alert("check form beginning ran successfully");
	//var card_name = document.getElementById("card_name"); 
	var card_year = document.getElementById("year");
	//var card_category = document.getElementById("category");
	//alert("check form end ran successfully");


//checks to ensure that fields have not been left empty 

/*
	if(card_name == ""){
		alert("You did not enter a card name. Please enter one now.");
		document.getElementById("year").focus();
		return false; 
	}

	*/
	if(card_year == "test"){
		alert("You did not enter a card year. Please enter one now.");
		document.getElementById("year").focus();
		return false;
	}

	

	/* might not be needed? 
	if(card_category == ""){
		alert("cateogry empty");
		document.getElementById("category").focus();
		return false; 
	}
	if(card_category == "Select your option"){
		alert(" select your option is stored");
		document.getElementById("category").focus();
		return false;
	}
	*/ 

/*
//checks and alerts user to enter a year as 4 digits
	var card_year_pattern = /\d{4}/; 
	var card_year_pattern_result = card_year_pattern.test(card_year); 
	if (card_year_pattern_result == false){
		alert("The year you entered (" + card_year + ") is not valid. Please enter a four digit year (example: 1999)  ");
		document.getElementById("year").focus(); 
		return false; 
	}

	*/

}

/*
//to test if placeholders are stored into vars
function checkCat() {

	
	var card_category = document.getElementById("category");

//checks to ensure that fields have not been left empty 
	
	if(card_category == ""){
		alert("cateogry empty");
		document.getElementById("category").focus();
		return false; 
	}
	if(card_category == "Select your option"){
		alert(" 'select your option is stored' as (" + card_category + ")");
		document.getElementById("category").focus();
		return false;
	}



}

*/
