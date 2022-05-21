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



function icon (iconName) {
 if ( iconName.classList.contains('fa-eye') ) {
   iconName.classList.remove('fa-eye');
   iconName.classList.add('fa-eye-slash');
  
} else  {
 iconName.classList.add('fa-eye');
 iconName.classList.remove('fa-eye-slash');
   
}


