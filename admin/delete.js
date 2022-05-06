   function buttonPressed (emailButton) {
      var emailID = emailButton.id;
      document.getElementById('userEmail').value = emailID;
      if (confirm ("Would you like to delete the user " + emailID + "?")) {
        document.getElementById('submitForm').submit(); 
         
      }
    }
