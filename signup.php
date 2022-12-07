<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                            placeholder="ex. name@email.com"></div>
                </div><br>
                
                <div class="su-firstname">
                    <div class="grid-item">Name:</div><br>
                    <div class="grid-item"><input name="name" id="name" type="text" class="fields" placeholder="ex. John"
                            autocomplete="off"></div>
                </div><br>

                <div class="su-email">
                    <p class="su-text">Username:</p>
                    <input name="username" id="username" type="text">
                </div><br>


                <div class="su-email">
                    <p class="su-text">Contact Number:</p>
                    <input name="contact" id="contact" type="text">
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
                </form>
            </div>
        </div>
    </div>

</body>