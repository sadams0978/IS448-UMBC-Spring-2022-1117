//document.getElementById("password").onkeyup = function() {checkPassword()};


function checkPassword () {


var pagePassword = document.getElementById("password");

var userPassword = pagePassword.value;
 var contains_uppercase = /[A-Z]+/; 
 var contains_special_char = /\W+/;
 var contains_digit = /\d+/;
 

  	//Result Checking for conditions
  
	var result1 = contains_uppercase.test(userPassword);
	var result2 = contains_special_char.test(userPassword);
	var result3 = contains_digit.test(userPassword);
	var passwordLength = userPassword.length;
	
	
	
	
	if (result1) {
	document.getElementById("upper_req").style.color="green"; 
	} 
	
	if (result2) {
	document.getElementById("special_req").style.color="green"; 	
	}
	
	if (result3) {	
	document.getElementById("digit_req").style.color="green"; 	
	}
	
	if (passwordLength >= 8) {
	document.getElementById("char_req").style.color="green"; 	
			
	}
	
	  
	
	
	  
  
 
  
}
