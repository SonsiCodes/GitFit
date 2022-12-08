<?php
include 'connection.php';
foreach ($_POST as $key => $value) {
    $check = "SELECT * FROM schedule";
    $result = mysqli_query($con, $check);
    while ($row = mysqli_fetch_array($result)) {
        if (!$result) {
            die("Error in query: " . mysqli_error($con));
        }
        if (preg_match("/[0-9]+_instructor/", $key)) {
            $value = htmlspecialchars($value);
            if ($value == $row['instructor']) {
                $key = strtok($key, '_');
                $sql = 'UPDATE schedule SET instructor = "' . $row['instructor'] . '" WHERE id = ' . $key;;
                $con->query($sql);
            } else {
                $key = strtok($key, '_');
                $sql = 'UPDATE schedule SET instructor = "' . $value . '" WHERE id = ' . $key;;
                $con->query($sql);
            }
        }
    }
}
header("location: ../admin.php");
