function visibility(passwordField, buttonField) {
  if (passwordField.type === "password") {
 	  passwordField.type = "text";
    buttonField.textContent = "Hide";
  } else {
    passwordField.type = "password";
    buttonField.textContent = "Unhide";
  }
}


function clearField () {
 var y = document.getElementById("email");
 y.value = ''; 
  
}


