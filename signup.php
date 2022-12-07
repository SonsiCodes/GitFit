<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GitFit | Sign Up</title>
    <link rel="icon" href="icons/appicon.png">
    <link rel="stylesheet" href="css\main.css">
    <link rel="stylesheet" href="css\signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&family=Source+Sans+Pro&family=Urbanist&display=swap"
        rel="stylesheet">
    <script type="module" src="signup.js"></script>
</head>

<body>
    <div class="navbar">

        <div class="su-content">
 
            <div class="signup">
                <h2 class="su-title">Create a New Account</h2>
            </div>
            <div class="su-details">
                <div class="su-email">
                    <div class="grid-item">Email:</div><br>
                    <div class="grid-item"><input id="email" type="text" class="fields"
                            placeholder="ex. name@email.com"></div>
                </div><br>
                <div class="su-firstname">
                    <div class="grid-item">First Name:</div><br>
                    <div class="grid-item"><input id="fname" type="text" class="fields" placeholder="ex. John"
                            autocomplete="off"></div>
                </div><br>
                <div class="su-lastname">
                    <div class="grid-item">Last Name:</div><br>
                    <div class="grid-item"><input id="lname" type="text" class="fields" placeholder="ex. Doe"
                            autocomplete="off"></div>
                </div><br>
                <div class="su-lastname">
                    <div class="grid-item">Contact Number:</div><br>
                    <div class="grid-item"><input id="contacts" type="text" class="fields"
                            placeholder="ex. 091234567891"></div>
                </div><br>
                <div class="su-pass">
                    <div class="grid-item">Password:</div><br>
                    <div class="grid-item"><input id="password" type="password" class="fields"></div>
                </div><br>
                <div class="su-conpass">
                    <div class="grid-item">Confirm Password:</div><br>
                    <div class="grid-item"><input id="conpassword" type="password" class="fields"></div>
                </div>
                <div class="su-button">
                    <button id="submitData" type="button">Sign Up</button>
                </div>
                    <div id="bottom"></div>
                </div>
            </div>
        </div>
    </div>

</body>