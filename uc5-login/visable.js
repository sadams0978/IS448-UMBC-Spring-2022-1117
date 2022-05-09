function visibility(passwordField) {
  if (passwordField.type === "password") {
 	  passwordField.type = "text";
  } else {
    passwordField.type = "password";
  }
}


function clearField () {
 var y = document.getElementById("email");
 y.value = ''; 
  
}


