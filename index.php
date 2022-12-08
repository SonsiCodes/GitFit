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
		<div class="logo_Cont">
			<img id="logo" class="logo" src="Logo/gitfitLogo.png" width=50% height="500">
		</div>

		<div class="container1">

			<div class="col_left">
				<!-- <div class="bookBtn">
					<a class="apply" href="booking.php">Apply Now!</a>
				</div> -->
			</div>


			<div class="col_right">
				<div class="Title">

					<text>Get fit with GitFit.</text>
					<!-- <text>Welcome to GitFit! a platform for individuals who are interested in getting in shape and improving their overall fitness. 
						The site offers a fitness course that is designed to help people of all fitness levels achieve their goals.
						From beginner workouts to advanced training programs, GitFit has something for everyone. Just fill out the application form 
						and enter your preferred schedules and we will assign you an instructor, making it simple for users to get started on their fitness journey. 
						Our highly trained and educated fitness coaches will provide support and guidance to help users throughout their fitness journey.</text> -->
				</div>

				<div class="Desc">
					<text>A fitness and exercise program for all fitness levels.</text>
				</div>

				<div class="Desc">
					<ul>
						<li>Designed to help people of all fitness levels achieve their goals.</li>
						<br>
						<li>From beginner workouts to advanced training programs, GitFit has something for everyone.</li>
						<br>
						<li>Enter your preferred schedules and we will assign you an instructor.</li>
						<br>
						<li>Our highly trained and educated fitness coaches will provide support and guidance to help users throughout their fitness journey.</li>
					</ul>
				</div>
				<div class="bookBtn">
					<a class="apply" href="booking.php">Apply Now!</a>
					<text class="Desc">For Only ₱3500/month</text>
				</div>
			</div>
		</div>

		<div class="container2">

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