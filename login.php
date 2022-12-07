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
                    <input name="username" id="username" type="text">
                </div><br>

                <div class="su-pass">
                    <p class="su-text">Password:</p>
                    <input name="password" id="password" type="password">
                </div><br>
                <div class="su-button">
                <a href="javascript:void(0);" onclick="document.getElementById('form').submit();">Login</a>
                <a href="signup.php">Register</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
<?php
}
?>