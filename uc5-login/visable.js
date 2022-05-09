function visibility(passwordField, buttonField) {
  if (passwordField.type === "password") {
 	  passwordField.type = "text";
    buttonField.classList.toggle("fa-solid fa-eye-slash");
  } else {
    passwordField.type = "password";
    buttonField.classList.toggle ("fa-solid fa-eye");
  }
}


function clearField () {
 var y = document.getElementById("email");
 y.value = ''; 
  
}


