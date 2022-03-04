<html>
 <body>


 <?php 
//Variables 
 $emailinvalid = "This e-mail entry is invalid, please try again. ";
 $passwordinvalid = "This e-mail entry is invalid, please try again. ";
 $email_info = "Here is the e-mail address you typed in:";
 $password_info = "Here is the password that you typed in";
 $homepage = "https://swe.umbc.edu/~samuela3/login";


 //Checking to see if the password is empty and exiting

    if(empty($_POST['email'])){
        header('Location: '.$homepage);
        die;
        
    }

    if(empty($_POST['password'])){
        header('Location: '.$homepage);
        die;

 
    }


    //Prints out the username and password
    
    print "<h1>" . $email_info. "<br>" .  $_POST['email'] . "</h1>";
    print "<h1>" . $password_info . "<br>" . $_POST['password'] . "</h1>";



 ?>


</body>
 </html> 
