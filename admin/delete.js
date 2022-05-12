   function buttonPressed (emailButton) {
      var emailID = emailButton.id;
      document.getElementById('userEmail').value = emailID;
      if (confirm ("Would you like to delete the user " + emailID + "?")) {
        document.getElementById('submitForm').submit(); 
         
      }
    }

   function changeGroup (newGroup) {
   var email = newGroup.id;
    var group = newGroup.value;
      
  new Ajax.Request( "group.php", 
	{ 
		method: "post", 
		parameters: {email:email,group:group}
		//onSuccess: console.log("This was successful"),
		//onFailure: alert("We were unable to change the user's status, please try again")
	} 
	);
      
      
   }
