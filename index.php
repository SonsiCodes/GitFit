<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GitFit</title>
    <link rel="icon" href="icons/appicon.png">
    <!-- <link rel="stylesheet" href="css\main.css"> -->
    <!-- <link rel="stylesheet" href="css\login.css"> -->
    <!-- <meta property="og:image" content="icons/appicon.png"> -->
    <!-- <link
        href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&family=Source+Sans+Pro&family=Urbanist&display=swap"
        rel="stylesheet">

    <script src="https://www.gstatic.com/firebasejs/ui/6.0.1/firebase-ui-auth.js"></script>
    <script type="module" src="login.js"></script>
    <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/6.0.1/firebase-ui-auth.css" /> -->

</head>

<body>


    <!-- <nav class="nav-bar">
        <link rel="stylesheet" href="css\nav-bar.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <div class="topnav" id="myTopnav">
            <a class="btns active" href="https://envirotech.com.ph">Home</a>
            <div class="links">
                <a class="btns" href="SignupPage.html">Sign up</a>
                <a class="btns" id="index.html">Login</a>
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
    </nav> -->

    <div class="su-content">
        <!-- <div class="logo">
            <a href="https://envirotech.com.ph"><img id="su-logo" src="icons/Envirotech_Logo-1.png"></a>
        </div> -->
        <div class="signup">
            <h1 class="su-title">Log in</h1>
        </div><br class="hiddenbr">
        <div class="su-details">
            <br><br>
            <div class="su-email">
                <p class="su-text">Email:</p>
                <input id="email" type="text" class="fields" placeholder="email@gmail.com" tabindex="1">
            </div><br>
            <div class="su-pass">
                <p class="su-text">Password:</p>
                <input id="password" type="password" class="fields" placeholder="password" tabindex="2">
            </div><br>
            <div class="su-button">
                <button id="loginbtn" type="button" tabindex="3">Login</button>
            </div>
            <!-- <div class="su-forgot">
                <a class="forgot" href="ForgotPass.html">Forgot Password?</a>
            </div> -->
        </div>
    </div>

</body>

</html>