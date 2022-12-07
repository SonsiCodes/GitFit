<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\signup.css">
    <title>GitFit | Sign Up</title>
</head>

<body>
    <div class="navbar">

        <div class="su-content">
 
            <div class="signup">
                <h2 class="su-title">Create a New Account</h2>
            </div>
            <div class="su-details">
            <form class="formValidate" id="formValidate" method="post" action="db/signupValidate.php">
                <div class="su-email">
                    <div class="grid-item">Email:</div><br>
                    <div class="grid-item"><input name="email" id="email" type="text" class="fields"
                            placeholder="Email"></div>
                </div><br>
                
                <div class="su-firstname">
                    <div class="grid-item">Name:</div><br>
                    <div class="grid-item"><input name="name" id="name" type="text" class="fields" placeholder="Name"
                            autocomplete="off"></div>
                </div><br>

                <div class="su-username">
                    <div class="grid-item">Username:</div><br>
                    <div class="grid-item"><input name="username" id="username" class = "fields" type="text" placeholder="Username">
                </div><br>


                <div class="su-contactnumber">
                    <div class="grid-item">Contact Number:</div><br>
                    <div class="grid-item"><input name="contact" id="contact" class = "fields" type="text" placeholder="Contact No.">
                </div><br>

                <div class="su-pass">
                    <div class="grid-item">Password:</div><br>
                    <div class="grid-item"><input name="password" id="password" type="password" class="fields"></div>
                </div><br>
                <div class="su-button">
                <a href="javascript:void(0);" onclick="document.getElementById('formValidate').submit();">Register</a>
                </div>
                    <div id="bottom"></div>
                </div>
                <br>
            </form>
                <div>
                <a href="login.php">Already have an account? Login Here</a>
                </div>
            </div>
        </div>
    </div>

</body>