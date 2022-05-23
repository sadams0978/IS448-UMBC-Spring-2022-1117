"use strict";

window.onload = pageLoad; 
function pageLoad(){



	document.getElementById("biggerTextB").onclick=increaseTextSize;
	document.getElementById("smallerTextB").onclick=decreaseTextSize;

	//document.getElementById("submitB").onclick = checkForm; 
	//document.getElementById("year").onblur = checkForm; 

	document.getElementById("card_name").onfocusout = checkForm; 
	document.getElementById("year").onfocusout = checkForm; 


	$("condition").onfocusout = showDefinition;

	//to test if placeholders are stored into vars
	//document.getElementById("category").onblur = checkCat; 

}

//modifies the text size within the text box to increase 
function increaseTextSize() { 
	var tarea = document.getElementById("description");
	tarea.style.fontSize = "24pt";
	alert("Incrased size");

}

//modifies the text size within the text box to decrease 
function decreaseTextSize() { 
	var tarea = document.getElementById("description");
	tarea.style.fontSize = "10pt"; 
	alert("Decreased size");
}


function checkName() {

	//alert("check form beginning ran successfully");
	var card_name = document.getElementById("card_name").value; 
	//var card_category = document.getElementById("category");
	//alert("check form end ran successfully");


	//checks that fields have not been left empty. Alerts user if they have been left empty
	if(card_name == ""){
		alert("You did not enter a card name. Please enter one now.");
		document.getElementById("year").focus();
		return false; 
	}

}


function checkYear() {

	//alert("check form beginning ran successfully");
	var card_year = document.getElementById("year").value;
	//var card_category = document.getElementById("category");
	//alert("check form end ran successfully");


	if(card_year == ""){
		alert("You did not enter a card year. Please enter one now.");
		document.getElementById("year").focus();
		return false;
  		}
 

	//checks and alerts user to enter a year as 4 digits
	var card_year_pattern = /\d{4}/; 
	var card_year_pattern_result = card_year_pattern.test(card_year); 
	if (card_year_pattern_result == false){
		alert("The year you entered (" + card_year + ") is not valid. Please enter a four digit year (example: 1999)  ");
		document.getElementById("year").focus(); 
		return false; 
	}


	//Ensures that card year is a year that has aleardy occurred
  	if (card_year >= 2022){
  			alert("The year your entered (" + card_year + ") is not valid. Please enter a valid year (2022 or earlier ) ");
			document.getElementById("year").focus(); 
			return false; 
  	}

}




function showDefinition(){
	//retrieve value from the 'term' textbox
	var searchTerm = $("condition").value;
					//= document.getElementById("condition").value;
	//create a new Ajax request with URL pointing to urban.php, and query-string-parameter-name is 'parameter1' and query-string-parameter-value being the value that
	//was retrieved from the 'condition' textbox above
	//on request success, you want the displayResult function to be invoked
	
	
	//urban.php?parameter1=css
	
	new Ajax.Request( "usecase4PSA.php", 
	{ 
		method: "get", 
		parameters: {parameter1:searchTerm},
		onSuccess: displayResult,
		onFailure: displayFailureMessage
	} 
	);
}

		//http://urban.php?parmeter1=js

/*
the response from the server, after the request is processed completely is
displayed as the value of the div-element with the id 'result'
*/
//note: ajax MUST be in the parameter list of this function always
function displayResult(ajax){
	//document.getElemenyById("result").innerHTML = ajax.responseText;
	$("result").innerHTML = ajax.responseText;
	//eXtensible Markup Language
	//document.getElementById("result").value = 1234;
	
}

function displayFailureMessage(){
	alert('ajax request failed');

}
