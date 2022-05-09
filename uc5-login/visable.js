function visibility(passwordField, buttonField) {
  if (passwordField.type === "password") {
 	  passwordField.type = "text";
    buttonField.value = "Hide";
  } else {
    passwordField.type = "password";
    buttonField.value = "Unhide";
  }
}


function clearField () {
 var y = document.getElementById("email");
 y.value = ''; 
  
}


