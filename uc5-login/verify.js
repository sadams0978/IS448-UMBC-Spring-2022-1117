function checkPassword () {

	
	//Variables
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
	} else {
		document.getElementById("upper_req").style.color="red"; 	
	}
		
		
	if (result2) {
	document.getElementById("special_req").style.color="green"; 	
	} else {
		document.getElementById("special_req").style.color="red"; 	
	}
	
	if (result3) {	
	document.getElementById("digit_req").style.color="green"; 	
	} else {
		document.getElementById("digit_req").style.color="red"; 	
	}
	
	if (passwordLength >= 8) {
	document.getElementById("char_req").style.color="green"; 	
	} else {
		document.getElementById("char_req").style.color="red"; 	
	}
	
}


function visible () {
	document.getElementById("password_requirements").style.visibility = "visible";
	
}

function hide () {
	document.getElementById("password_requirements").style.visibility = "hidden";
	
	
}


function secondVerify () {
		var initial = document.getElementById("password").value;
		var second =  document.getElementById("password_verify").value;
	
	
	if (initial == second) {
	document.getElementById("password_verify").style.color = "green";
		
	} else {
	document.getElementById("password_verify").style.color = "red";
			
	}
	
}







// Below Function Executes On Form Submit
function formCheck (formName) {

if (formName == "passwordChange") {
	passwordChangeCheck();
	
} else {
	newUserCheck();
	
}

}

function passwordChangeCheck () {
alert("You are on the Password Change Form!");	
return false;
}


function newUserCheck () {
	alert ("You are on the new User Form!");
	return false;
}
