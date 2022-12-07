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
echo "<th>ID</th> <th>Name</th> <th>Username</th> <th>Email</th> <th>Contact</th>";
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo '<td><input value="'. $row['name'].'" id="'. $row['id'].'" type="text">' . "</td>" ;
        // "<td>" . $row['name'] . "</td>" .
        // "<td>" . $row['username']. "</td>" .
        // "<td>" . $row['email']. "</td>" .
        // "<td>" . $row['contact'] . "</td>".
        // '<td> <a href="">edit</a> </td>';
    echo "</tr>";
}
echo "</table>";

// Close connection
mysqli_close($con);
?>
 <div>
    <button type="submit"
        name="action">Modify
    </button>
    </div>
    </form>
    
</body>
</html>