<?php  
session_start(); 
if(isset($_SESSION['admin_sid']) || isset($_SESSION['customer_sid']))
{
	header("location:index.php");
}
else{
?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\login.css">
    <title>GitFit | Login</title>
</head>

<body>
    
    <div class="su-content">
        <div class="signup">
            <h1 class="su-title">Log in</h1>
        </div><br class="hiddenbr">
        <div class="su-details">
            <br><br>
            <form method="post" action="db/loginValidate.php" class="login-form" id="form">

                <div class="su-email">
                    <p class="su-text">Username:</p>
                    <input name="username" id="username" class = "fields" type="text" placeholder="Username">
                </div><br>

                <div class="su-pass">
                    <p class="su-text">Password:</p>
                    <input name="password" id="password" class = "fields" type="password" placeholder="******">
                </div><br>
                <div class="su-button">
                <a class="login" href="javascript:void(0);" onclick="document.getElementById('form').submit();">Login</a>
                </div>
                <a class= "reg" href="signup.php">Don't have an account yet? Register here</a>
            </form>
        </div>
    </div>

</body>

</html>
<?php
}
?>