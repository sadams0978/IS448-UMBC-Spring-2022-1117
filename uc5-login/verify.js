function checkPassword () {
	//Variables
	var userPassword = document.getElementById("password").value;
 	var contains_uppercase = /[A-Z]+/; 
 	var contains_special_char = /\W+/;
 	var contains_digit = /\d+/;
 

  	//Result Checking for conditions
	var result1 = contains_uppercase.test(userPassword);
	var result2 = contains_special_char.test(userPassword);
	var result3 = contains_digit.test(userPassword);
	var passwordLength = false; 
	
	
	if (result1) {
	document.getElementById("upper_req").style.color="green"; 
	} else {
		document.getElementById("upper_req").style.color="red"; 
		return;
	}
		
		
	if (result2) {
	document.getElementById("special_req").style.color="green";
	} else {
		document.getElementById("special_req").style.color="red"; 
		return;
	}
	
	if (result3) {	
	document.getElementById("digit_req").style.color="green"; 	
	} else {
		document.getElementById("digit_req").style.color="red";
		return;
	}
	
	if (userPassword.length >= 8) {
	document.getElementById("char_req").style.color="green";
	passwordLength == true;
	
	} else {
		document.getElementById("char_req").style.color="red";
		return;
	}
	
	if ((result1 && result2 && result3 && passwordLength) == true) {
	return true;
	} else {
	return false;	
	}

}


function visible () {
	document.getElementById("password_requirements").style.visibility = "visible";
	
}

function hide () {
	document.getElementById("password_requirements").style.visibility = "hidden";
	
	
}


// Below Function Executes On Form Submit
function formCheck (formName) {
if (formName == "passwordChange") {
	//Checking Password and seeing if it is valid
	var passwordCheck = checkPassword();
	if (passwordCheck == true) {
	return true;	
	} else {
	return false;	
	}
	


} else {
var nameResult = checkName();
var emailResult = checkEmail();
var passwordResult = checkPassword();
var dateResult = checkDate();
	
	if ( (nameResult && emailResult && passwordResult && dateResult) == true) {
	return true;
	} else {
	return true;	
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
	} else return true;
	
}


function checkEmail () {
	//Email Check
	var email = document.getElementById("email").value;
 	var isEmail = /^[a-zA-Z]+$/; 
	var emailResult = isEmail.test(email);
	
	if (emailResult) {
	return true;
	} else  {
	alert ("Please check your email address.");	
		return false;
	}
	
}


function checkDate () {
	var userDate = document.getElementById("dob").value;
	var isDate = /^\d{4}-\d{2}-\d{2}$/;
	var dateTest = isDate.test(userDate);
	

}

