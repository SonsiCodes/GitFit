<?php
include 'connection.php';


$userdelete = $_GET['id'];
echo $userdelete;



$sql = "DELETE FROM users WHERE id = '$userdelete'";
$result = mysqli_query($con, $sql);

if ($result) {
    echo "Row deleted successfully.";
} else {
    echo "Error deleting row: " . mysqli_error($con);
}

header("location: ../admin.php");
