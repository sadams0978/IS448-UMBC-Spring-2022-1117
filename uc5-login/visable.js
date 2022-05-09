function visibility() {
  var x = document.getElementById("userPassword");
  if (x.type === "password") {
 	  x.type = "text";
  } else {
    x.type = "password";
  }
}


function clearField () {
 
 var y = document.getElementById("email");
 y.value = ''; 
  
}


