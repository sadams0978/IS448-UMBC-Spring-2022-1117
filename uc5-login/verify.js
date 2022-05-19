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
	return true;
	} else {
		document.getElementById("upper_req").style.color="red"; 	
	}
		
		
	if (result2) {
	return true;
	document.getElementById("special_req").style.color="green"; 	
	} else {
		document.getElementById("special_req").style.color="red"; 
		return false;
	}
	
	if (result3) {	
	return true;
	document.getElementById("digit_req").style.color="green"; 	
	} else {
		document.getElementById("digit_req").style.color="red";
		return false;
	}
	
	if (passwordLength >= 8) {
	document.getElementById("char_req").style.color="green"; 
		return true;
	} else {
		document.getElementById("char_req").style.color="red"; 	
		return false;
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
		return true;
		
	} else {
	document.getElementById("password_verify").style.color = "red";
		return false;
			
	}
	
}







// Below Function Executes On Form Submit
function formCheck (formName) {
var result = false;

if (formName == "passwordChange") {
	result = passwordChangeCheck();
	if (result) {
	return true;	
	} else {
	return false;	
	}
	
} else {
	result = newUserCheck();
	if (result) {
	return true;	
	} else {
	return false;	
	}
	
}

}

function passwordChangeCheck () {
if (checkPassword()) {
return true;	
} else {
alert ("Please check your password and try again");
return false;	

}
}


function newUserCheck () {
passwordResult = checkPassword();
checkOtherResult = checkOther();
	

if ( (passwordResult && checkOtherResult) == true) {
return true;
	
} else {
return false;	

}	
	
	
}


function checkName () {
	
	//First and Last Name Check
	var firstName = document.getElementById("first_name").value;
	var lastName = document.getElementById("last_name").value;
 	var contains_letters = /^[a-zA-Z]+$/; 
	var firstNameResult = contains_letters.test(firstName);
	var lastNameResult = contains_letters.test(lastName);
	
	
	if ((firstNameResult || lastNameResult) === false ) {
	alert ("Please check your first name or last name. It should only contain Letters.");
	return false;
	}
	
}


function checkEmail () {
	//Email Check
	var email = document.getElementById("email").value;
 	var isEmail = /^[a-zA-Z]+$/; 
	var emailResult = isEmail.test(email);
	
	if (emailResult === false ) {
	alert ("Please check your email address.");
	return false;
	} else { 
	return true;	
	}
	
}


