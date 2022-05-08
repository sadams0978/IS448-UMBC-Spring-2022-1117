function checkPassword () {
 var contains_uppercase = /[A-Z]+/; 
 var contains_special_char = /\W+/;
 var contains_digit = /\d+/;
 var userPassword;
 
 document.getElementById('password').value = userPassword;
  
  
 var result1 = contains_uppercase.test(userPassword);
 var result2 = contains_special_char.test(userPassword);
 var result3 = contains_digit.test(userPassword);
  
  if (result1 && result2 && result3) {
    
   document.getElementById('password').style.color="green"; 
    
  }
  
 
  
}
