   function buttonPressed (emailButton) {
      var emailID = emailButton.id;
      alert("You have deleted user " + emailID);
      document.getElementById('userEmail').value = emailID;
      document.getElementById('submitForm').submit();

    }
