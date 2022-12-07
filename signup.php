<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resiklo | Sign Up</title>
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

        <nav class="nav-bar">
            <link rel="stylesheet" href="css\nav-bar.css">
            <link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <div class="topnav" id="myTopnav">
                <a class="btns active" href="https://envirotech.com.ph">Home</a>
                <div class="links">
                    <a class="btns" href="SignupPage.html">Sign up</a>
                    <a class="btns" id="myBtn" href="index.html">Login</a>
                    <a id="nav-btn" class="btns1" href="https://www.youtube.com/channel/UCdb6utvgaP064RHcuN45Iew"><img
                            id="nav-icon" src="icons\yt.png" style="width: 20px; height: 20px;"></a>
                    <a id="nav-btn" class="btns" href="https://www.facebook.com/envirotechphil"><img id="nav-icon"
                            src="icons\fb.png" style="width: 20px; height: 20px;"></a>
                </div>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>

            <script>
                function myFunction() {
                    var x = document.getElementById("myTopnav");
                    if (x.className === "topnav") {
                        x.className += " responsive";
                    } else {
                        x.className = "topnav";
                    }
                }
            </script>
        </nav>

        <div class="su-content">
            <div class="logo">
                <a href="Homepage.php"><img id="su-logo" src="icons/Envirotech_Logo-1.png"></a>
            </div><br>
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