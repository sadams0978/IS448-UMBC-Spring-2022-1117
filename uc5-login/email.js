function checkEmail () {
	//Email Check
	var email = document.getElementById("email").value;
 	var isEmail = /^\w+@\w+\.\w+$/; 
	var emailResult = isEmail.test(email);
	
	if (emailResult) {
	return true;
	} else  {
	alert ("Please check your email address.");
		return false;
	}
	
}
