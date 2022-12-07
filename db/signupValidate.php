<?php
include 'connection.php';
$email = htmlspecialchars($_POST['email']);
$name = htmlspecialchars($_POST['name']);
$username = htmlspecialchars($_POST['username']);
$contact = $_POST['contact'];
$password =  htmlspecialchars($_POST['password']);


// function number($length) {
//     $result = '';

//     for($i = 0; $i < $length; $i++) {
//         $result .= mt_rand(0, 9);
//     }

//     return $result;
// }

$sql = "INSERT INTO users (email, name, username, contact, password) VALUES ('$email', '$name', '$username', '$contact', '$password');";
if($con->query($sql)==true){
    $user_id =  $con->insert_id;
}

header("location: ../login.php");
?>