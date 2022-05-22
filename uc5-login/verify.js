function checkPassword () {
	var passwordRequirements = false;
	
	if (passwordRequirements == false) {
	
	//Variables
	var userPassword = document.getElementById("password").value;
 	var contains_uppercase = /[A-Z]/; 
 	var contains_special_char = /\W/;
 	var contains_digit = /\d/;
 

  	//Result Checking for conditions
	var result1 = contains_uppercase.test(userPassword);
	var result2 = contains_special_char.test(userPassword);
	var result3 = contains_digit.test(userPassword);	
	var result4 = (userPassword.length >= 8);
		
		
	if (result1 == false) {
	document.getElementById("upper_req").style.color="red"; 
	} else {
	document.getElementById("upper_req").style.color="green"; 
	}
		
		
	if (result2 == false) {
	document.getElementById("special_req").style.color="red"; 
	} else {
	document.getElementById("special_req").style.color="green"; 
	}	
	
		
		
	if (result3 == false) {	
	document.getElementById("digit_req").style.color="red";
	} else {
	document.getElementById("digit_req").style.color="green";		
	}
		
	if (result4 == false) {
	document.getElementById("char_req").style.color="red";
	} else {
	document.getElementById("char_req").style.color="green";
	}	
		
	
		if ( (result1 == true) && (result2 == true) && (result3 == true) && (result4 == true) ) {
			passwordRequirements == true;
			document.getElementById("password").style.border = "black";
			return true;
			
		} else {
		document.getElementById("password").style.border = "2px solid red";
		return false;	
		}
		
		
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
	
	if (nameResult && emailResult && dateResult && passwordResult) {
	return true;
	} else return false;

}

function checkName () {
	
	//First and Last Name Check
	var firstName = document.getElementById("first_name").value;
	var lastName = document.getElementById("last_name").value;
 	var contains_letters = /^[a-zA-Z]+$/; 
	var firstNameResult = contains_letters.test(firstName);
	var lastNameResult = contains_letters.test(lastName);
	
	
	if (firstNameResult == false) {
	  document.getElementById("first_name").style.border = "2px solid red";
		return false;
	} else if (lastNameResult === false) {
		 document.getElementById("last_name").style.border = "2px solid red";
		return false;
	} else {
	return true	
	}
	
}


function checkEmail () {
	//Email Check
	var email = document.getElementById("email").value;
 	var isEmail = /^\w+@\w+\.\w+$/; 
	
	var emailResult = isEmail.test(email);
	
	if (emailResult == true) {
	return true;
	} else  {
 	document.getElementById("email").style.border = "2px solid red";
		return false;
	}
	
}


function checkDate () {
	var userDate = document.getElementById("dob").value;
	var isDate = /^\d{4}-\d{2}-\d{2}$/;
	var dateTest = isDate.test(userDate);
	
	if (dateTest == true) {
	return true;	
	} else {
	 document.getElementById("dob").style.border = "2px solid red";
	return false;
	}
	

}
}
