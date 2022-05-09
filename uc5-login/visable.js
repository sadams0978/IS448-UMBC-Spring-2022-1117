function visibility() {
  var x = document.getElementById("userPassword");
  if (x.type === "password") {
 	  x.type = "text";
  } else {
    x.type = "password";
  }
}



