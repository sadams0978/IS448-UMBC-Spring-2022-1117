function visibility(passwordField, buttonField) {
  if (passwordField.type === "password") {
 	  passwordField.type = "text";
    buttonField.className = "fa-solid fa-eye-slash";
  } else {
    passwordField.type = "password";
    buttonField.className = "fa-solid fa-eye";
  }
}


function clearField () {
 var y = document.getElementById("email");
 y.value = ''; 
  
}


