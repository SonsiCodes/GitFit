<?php
include 'db/connection.php';


if ($_SESSION['admin_sid'] == session_id()) {
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css\main.css">
		<title>GitFit | Admin Dashboard</title>
	</head>

	<body class="admin-side">
		<nav class="user-nav">
			<h4 class="nav-title">Admin Dashboard</h4>
			<a class="nav-link" href="usermanagement.php">Manage Users</a>
			<a class="nav-link" href="logout.php">Logout</a>
		</nav>
		<div class="admin-content">
			<div class="cont-title">
				<h1>Customer Schedules</h1>
			</div>
			<table>
				<thead>
					<tr class="table-head">
						<th>Name</th>
						<th>Contact</th>
						<th>Day</th>
						<th>Time</th>
						<th>Instructor</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>test</td>
						<td>test</td>
						<td>test</td>
						<td>test</td>
						<td>test</td>
					</tr>
					<tr>
						<td>test</td>
						<td>test</td>
						<td>test</td>
						<td>test</td>
						<td>test</td>
					</tr>
					<tr>
						<td>test</td>
						<td>test</td>
						<td>test</td>
						<td>test</td>
						<td>test</td>
					</tr>
				</tbody>
			</table>
		</div>
	</body>

	</html>
<?php
} else {
	if ($_SESSION['customer_sid'] == session_id()) {
		header("location:index.php");
	} else {
		header("location:login.php");
	}
}
?>