//javascript code to display favorite cards info
"use strict";
window.onload=pageLoad;
function pageLoad(){
	document.getElementById("submitFav").onclick=validate;
}

function validate(){
	//variables
	// var cardname = document.getElementById("").value;
	// var carddescription = document.getElementById("").value;
	// var cardcategory = document.getElementById("").value;
	// var cardcondition = document.getElementById("").value;
	// var cardfinish = document.getElementById("").value;
	// var cardcomposition = document.getElementById("").value;
	// var cardyear = document.getElementById("").value;
	// var cardprice = document.getElementById("").value;
	
	//C_ID
	var valid = true;
	var errormessage = "";
	
	var cardid = document.getElementById("C_ID").elements["<?php echo ($card[$i]['C_ID']);?>"];
	if(cardid == ''){
		errormessage = errormessage + "Customer ID is empty \n";
		valid = false;
	}
	
	if(valid == false){
		alert(errormessage);
		return false;
	}else{
		return true;
	}
	
}
