<?php
include 'db/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\tracking.css">
    <title>GitFit</title>
</head>
<body>
    <div class="cont-great">
        <p>Great! Now that we have your schedule all set, please wait for our administrators to assign you an instructor.</p>
    </div>

    <div>
    <!-- subscription status + amt to pay display -->
    <?php
        $result = mysqli_query($con, "SELECT * FROM users WHERE id='$uid'");
        while($row = mysqli_fetch_array($result))
        {
            $name = $row['name'];
        }

        $res = mysqli_query($con, "SELECT * FROM users WHERE name='$name'");
        while($row = mysqli_fetch_array($res))
        {
            $day = $row['day'];
            $time = $row['time'];
            $instructor =  $row['instructor'];
        }
    ?>
    </div>


    <div class="cont-pay">
        <p>Please pay the subscription amount so we can activate your subscription and start your fitness journey!</p>
        <p>After your subscription has been activated, your assigned instructor will contact you when you are able to start the program</p>
        <a href="logout.php">Logout</a>
    </div>

</body>
</html>