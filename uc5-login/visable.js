function visibility(passwordField, buttonField) {
  if (passwordField.type === "password") {
 	  passwordField.type = "text";
    buttonField.classList.remove ("fa-solid fa-eye");
    buttonField.classList.add("fa-solid fa-eye-slash");
  } else {
    passwordField.type = "password";
    buttonField.classList.remove("fa-solid fa-eye-slash");
    buttonField.classList.add ("fa-solid fa-eye");
  }
}


function clearField () {
 var y = document.getElementById("email");
 y.value = ''; 
  
}


