<?php include 'db/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\booking.css">
    <title>GitFit | Booking
    </title>
</head>
<body>
    <!-- <nav class="user-nav">
        <h4 class="nav-title">Hello Customer!</h4>
		<a class="nav-link" href="logout.php">Logout</a>
	</nav> -->
    <div class="cont-title">
        <h1>Customize Your Fitness Schedule</h1>
    </div>
    <div class="cont-choices">
        <p>Choose Your Preferred Days of the Week: (Our program offers 4 sessions weekly)<p>

        <form class="formBook" method="post">
            <input type="checkbox" id="checkbox1" name="checkboxes[]" value="Sunday"> Sunday </input>
            <input type="checkbox" id="checkbox1" name="checkboxes[]" value="Monday"> Monday </input>
            <input type="checkbox" id="checkbox1" name="checkboxes[]" value="Tuesday"> Tuesday </input>
            <input type="checkbox" id="checkbox1" name="checkboxes[]" value="Wednesday"> Wednesday </input>
            <input type="checkbox" id="checkbox1" name="checkboxes[]" value="Thursday"> Thursday </input>
            <input type="checkbox" id="checkbox1" name="checkboxes[]" value="Friday"> Friday </input>
            <input type="checkbox" id="checkbox1" name="checkboxes[]" value="Saturday"> Saturday </input>

            <div>
                <p>Please indicate your preferred time schedule for your sessions:</p>
                <select name="TOD" id="TOD">
                    <!-- <option value="">Select Time</option> -->
                    <option value="Morning">Mornings (7:00AM - 10:00AM)</option>
                    <option value="Afternoon">Afternoons (1:00PM - 3:00PM)</option>
                    <option value="Evening">Evenings (6:00PM - 9:00PM)</option>
                </select> 
            </div>
            <div>
                <br>
                <input id="submit" type="submit" name="submit" value="Apply">
                <a href="logout.php">Logout</a>
            </div>
        </form>
        <?php 
            $max_checkboxes = 4;
            // Check if the form has been submitted
            if (isset($_POST['submit'])) {
                $count = 0;
                if(empty($_POST['checkboxes'])) {
                    echo "Please choose your preferred days of the week to continue.";
                    }else{
                        foreach ($_POST['checkboxes'] as $checkbox) {
                            // If the checkbox is selected, increment the counter
                            if(!empty($_POST['checkboxes'])) {
                                $count++;
                                }
                            }
                            // If the number of checkboxes selected is greater than the maximum,
                            // display an error message
                            if ($count > $max_checkboxes) {
                                echo "You can only choose four days to continue.";
                            }
                            if($count < 4){
                                echo "Please choose 4 days of your preferred scheduled sessions";

                            }if($count == 4){    //save to database
                                $name = $_SESSION['name'];
                                $result = mysqli_query($con, "SELECT * FROM users WHERE name='$name'");
                                while($row = mysqli_fetch_array($result))
                                {
                                    $contact = $row['contact'];
                                }
                                $time = ($_POST['TOD']);
                                $daysofweek = ($_POST['checkboxes']);
                                $days= "";
                                foreach($daysofweek as $s) {
                                    $days .= $s . ",";
                                }

                                $sql = "INSERT INTO schedule (contact, day, time, name ) VALUES ('$contact', '$days', '$time', '$name');";
                                if($con->query($sql)==true){
                                    $user_id =  $con->insert_id;
                                    echo 'add success';
                                    header("location:tracking.php");
                                }else{
                                    echo 'error';
                                }
                            }
                    }
        }
        ?>
    </div>
</body>
</html>