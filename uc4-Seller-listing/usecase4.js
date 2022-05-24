"use strict";

window.onload = pageLoad; 
function pageLoad(){



	document.getElementById("biggerTextB").onclick=increaseTextSize;
	document.getElementById("smallerTextB").onclick=decreaseTextSize;

	//document.getElementById("submitB").onclick = checkForm; 
	//document.getElementById("year").onblur = checkForm; 

	document.getElementById("card_name").onfocusout = checkName; 
	document.getElementById("year").onfocusout = checkYear; 


	/* ajax attemp1 urban 
	//$("condition").onfocusout = showDefinition;

	$("psa_grade").onclick = showDefinition;
	*/ 


   $("condition").onblur = getGrade; //when the user clicks off of the condition, the event handler is run



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




/* Ajax attempt 2 popcorn */ 

//  Ajax JavaScript code for the popcornA.html document
// function getPlace
//  parameter: zip
function getGrade(){

    var valueOfCondition = $("condition").value;

	//create a new Ajax request to the URL getCityState.php
	//query-string-parameter-name is zip
	//query-string-parameter-value is the parameter that was sent to this function, i.e., the zip code value that the user entered
	//on the successful processing of the Ajax request, we want the displayCityState function to be invoked
  new Ajax.Request( "usecase4PSA.php", 
  { 
    method: "get", 
    parameters: {condition:valueOfCondition},
    onSuccess: displayGrade,
    onFailure: displayFailureMessage

  } );
}

  //getCityState.php?zip=21044

//displayCityState is the function that is to be executed when the Ajax request is successful
//IMPORTANT: The variable ajax MUST be in the parameter list of this function
//this function, retrieves the response sent by the PHP program above,  splits the response at the  comma-space character
//and populates the values  of the city and state textboxes with the split values
function displayGrade(ajax){
      var result = ajax.responseText;
	console.log(result);
	  //Annapolis, MD
      //var place = result.split(',');
 

      $("psa_grade").value = result;
      //$("state").value = place[1];
}

function displayFailureMessage(){
	alert('ajax request failed');

}



/* Ajax attempt 1 urban 
function showDefinition(){
	//retrieve value from the 'condition' textbox
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

/*
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

*/
