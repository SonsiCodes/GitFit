<?php include "db/connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GitFit | User Management</title>
</head>

<body>

    <form class="formValidate" id="formValidate" method="post" action="db/editUser.php">
        <?php
        $sql = "SELECT * FROM users";
        // Execute the query
        $result = mysqli_query($con, $sql);
        // Check for errors in the SQL query
        if (!$result) {
            die("Error in query: " . mysqli_error($con));
        }
        echo "<table>";
        echo "<tr>";
        echo "<th>Name</th> <th>Email</th> <th>Contact</th> <th>Payment</th> <th>Status</th> <th></th>";
        while ($row = mysqli_fetch_array($result)) {
            if ($row['role'] == "customer") {
                echo "<tr>";
                echo '<td>' . $row['name'] . "</td>";
                echo '<td>' . $row['email'] .  "</td>";
                echo '<td>' . $row['contact'] . "</td>";
                if ($row['payment'] == "unpaid") {
                    $text1 = 'selected';
                    $text2 = '';
                } else {
                    $text1 = '';
                    $text2 = 'selected';
                }
                echo '<td><select name="' . $row['id'] . '_payment">
                        <option value="unpaid" ' . $text1 . '>Unpaid</option>
                        <option value="paid" ' . $text2 . '>Paid</option> </select></td>';
                if ($row['status'] == "inactive") {
                    $text3 = 'selected';
                    $text4 = '';
                } else {
                    $text3 = '';
                    $text4 = 'selected';
                }
                echo '<td><select name="' . $row['id']  . '_status">
                <option value="inactive" ' . $text3 . '>Inactive</option>
                <option value="active" ' . $text4 . '>Active</option> </select></td>';
                echo '<td>';
                // echo '<a href="deleteUser.php?id=' . $row['id'] . ' ">Delete</a>';
                echo '<a href="db/deleteUser.php?id=' . $row['id'] . ' ">Delete</a>';
                echo '</td>';
                echo "</tr>";
            }
        }
        echo "</table>";

        // Close connection
        mysqli_close($con);
        ?>
        <div>
            <button type="submit" name="action">Modify
            </button>
        </div>
    </form>

</body>

</html>