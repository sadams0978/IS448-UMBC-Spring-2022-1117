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
		parameters: {email:email,group:group},
	  	onFailure: displayErrorMessage
	} 
	);
      
      
   }


	function displayErrorMessage () {
	//Alerts the user that they couldn't change the group
	alert("The update was unsuccessful. Only Admin users can delete/modify users. ");
	
	//Reloads the Window to show the actual value
	location.reload()

	}
