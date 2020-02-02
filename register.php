<?php
    require 'dbconfig/config.php';
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
  
        <form class="myform" action = "register.php" method = "post">
            <label><b>Username:</b></label><br>
            <input name = "username" type="text" class="inputvalues" placeholder="Type your username" required/><br>
            <label><b>Password:</b></label><br>
            <input name = "password" type="password" class="inputvalues" placeholder="Type your password" required/><br> 
            <label><b>Confirm Password:</b></label><br>
            <input name = "cpassword" type="password" class="inputvalues" placeholder="Confirm password" required/><br> 
            <input name = "submit_btn" type="submit" id="signup_btn" value="Sign Up"/><br>
            <a href = "index.php"><input type="button" id="back_btn" value="Back to login"/></a>
        </form>
        
        <?php
            if(isset($_POST['submit_btn']))
            {
                //echo '<script type = "text/javascript"> alert("Sign Up button clicked") </script>';

                $username = $_POST['username'];
                $password = $_POST['password'];
                $cpassword = $_POST['cpassword'];

                if($password == $cpassword)
                {
                    $query = "select * FROM userinfo WHERE username = '$username'";   
                    $query_run = mysqli_query($con,$query);

                    if(mysqli_num_rows($query_run)>0)
                    {
                        //already a same username exits
                        echo '<script type = "text/javascript"> alert("Username exists. Try another username") </script>';
                    }
                    else
                    {
                        $query = "insert INTO userinfo values('$username','$password')"; 
                        $query_run = mysqli_query($con,$query);  

                        if($query_run)
                        {
                            echo '<script type = "text/javascript"> alert("Congratulations! You are registered now.") </script>';
                        }
                        else
                        {
                            echo '<script type = "text/javascript"> alert("Error!") </script>';
                        }

                    }
                }
                else
                {
                    echo '<script type = "text/javascript"> alert("Error! Passwords did not match.") </script>';
                }

            }
        ?>
        

    </div> 


</body>
</html>


