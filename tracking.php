<?php
include 'db/connection.php';
$uid = $_SESSION['user_id'];

$result = mysqli_query($con, "SELECT * FROM schedule WHERE schedID='$uid'");
if (mysqli_num_rows($result) == 1) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css\tracking.css">
        <title>GitFit | Subscription</title>
    </head>

    <body>
        <nav class="user-nav">
            <text class="nav-title">Welcome Customer!</text>
            <a class="nav-link" href="index.php">Home Page</a>
            <a class="nav-link" href="logout.php">| Logout</a>
        </nav>

        <div class="cont-great">
            <p>Great! Now that we have your schedule all set, please wait for our administrators to assign you an instructor.</p>
        </div>

        <div class="cont-details">
            <!-- subscription status + amt to pay display -->
            <?php
            $uid = $_SESSION['user_id'];
            $result = mysqli_query($con, "SELECT * FROM users WHERE id='$uid'");
            while ($row = mysqli_fetch_array($result)) {
                $name = $row['name'];
                $payment = $row['payment'];
                $status = $row['status'];
            }

            $res = mysqli_query($con, "SELECT * FROM schedule WHERE name='$name'");
            while ($row = mysqli_fetch_array($res)) {
                $day = $row['day'];
                $time = $row['time'];
                $instructor =  $row['instructor'];
            }
            if ($time == "Morning") {
                $ToD = "Mornings (7:00AM - 10:00AM)";
            } else if ($time == "Afternoon") {
                $ToD = "Afternoons (1:00PM - 3:00PM)";
            } else if ($time == "Evening") {
                $ToD = "Evenings (6:00PM - 9:00PM)";
            }


            echo "<div>";
            echo "Hi " . $name . ", This is your chosen schedule: ";
            echo "</div>";

            echo "<div>";
            echo "Days of the Week:";
            echo "</div>";
            echo "<div>";
            echo $day;
            echo "</div>";

            echo "<div>";
            echo "Time Schedule:";
            echo "</div>";
            echo "<div>";
            echo $ToD;
            echo "</div>";

            echo "<div>";
            echo "Subscription Fee: ₱3500/month";
            echo "</div>";

            echo "<div>";
            echo "Payment Status: <br> " . $payment . "<br>";
            echo "Subscription Status: <br> " . $status . "<br>";
            echo "Assigned Instructor: <br> " . $instructor . "<br>";
            echo "</div>";
            ?>
        </div>


        <div class="cont-pay">
            <p>Please pay the subscription amount so we can activate your subscription and start your fitness journey!</p>
            <p>After your subscription has been activated, your assigned instructor will contact you when you are able to start the program. Good Luck!</p>
        </div>

    </body>
<?php
    //if the user has no subscription application yet
} else {
    header("location:index.php");
    echo "You do not have a subsciption";
}
?>

    </html>