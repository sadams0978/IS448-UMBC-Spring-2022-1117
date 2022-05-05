   function buttonPressed (emailButton) {
      var emailID = emailButton.id;
      alert("You have deleted user " + emailID);
      emailID = document.getElementById('userEmail').value;
      document.getElementById('userEmail').submit();

    }
