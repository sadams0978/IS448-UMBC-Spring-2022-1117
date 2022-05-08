document.getElementById("password").onchange = function() {checkPassword()};

function myFunction() {
  var x = document.getElementById("fname");
  x.value = x.value.toUpperCase();
}





function checkPassword () {
var pagePassword = document.getElementById("password");
var userPassword = pagePassword.value;
 var contains_uppercase = /[A-Z]+/; 
 var contains_special_char = /\W+/;
 var contains_digit = /\d+/;
 var userPassword;
 

  
  
 var result1 = contains_uppercase.test(userPassword);
 var result2 = contains_special_char.test(userPassword);
 var result3 = contains_digit.test(userPassword);
  
  if (result1 && result2 && result3) {
    
   pagePassword.style.color="green"; 
   return true;

    
  } else  {
	  
pagePassword.style.color="red";
	  
	  return false;
  }
	  
	  
  
 
  
}
