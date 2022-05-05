   function buttonPressed (emailButton) {
      var emailID = emailButton.id;
      alert("You have deleted user " + emailID);
      document.getElementByID('userEmail').value = emailID;
      document.getElementById('userEmail').submit();

    }
