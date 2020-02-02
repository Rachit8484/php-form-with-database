<?php

?>

<!DOCTYPE html>
<html>
<head>
<title>Sign Up Form</title>
<link rel="stylesheet" href = "css/style.css">
</head>
<body style = "background-color:#7f8c8d">
    <div id = "main-wrapper">
        <center>
            <h2>Sign Up Form</h2>
            <img src = "img/avatar.png" class = "avatar"/>
        </center>
  
    <form class="myform" action = "index.php" method = "post">
    <label><b>Username:</b></label>
    <input type="text" class="inputvalues" placeholder="Type your username"/><br>
    <label><b>Password:</b></label>
    <input type="password" class="inputvalues" placeholder="Type your password"/><br> 
    <label><b>Confirm Password:</b></label>
    <input type="password" class="inputvalues" placeholder="Confirm password"/><br> 
    <input type="submit" id="signup_btn" value="Sign Up"/><br>
    <input type="button" id="back_btn" value="Back to login"/>

    
    </form>
    </div> 


</body>
</html>


