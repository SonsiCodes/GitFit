<?php
include 'db/connection.php';

if ($_SESSION['customer_sid'] == session_id()) {
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css\main.css">
		<title>GitFit | Home Page</title>
	</head>

	<body class="customer-side">
		<nav class="user-nav">
			<text class="nav-title">Welcome Customer!</text>
			<a class="nav-link" href="tracking.php">|  Account</a>
			<a class="nav-link" href="logout.php">|  Logout</a>
		</nav>
		<div class="admin-content">
			<a class="nav-link" href="booking.php">Apply Now!</a>
		</div>
	</body>

	</html>


<?php
} else {
	if ($_SESSION['admin_sid'] == session_id()) {
		header("location:admin.php");
	} else {
		header("location:login.php");
	}
}
?>