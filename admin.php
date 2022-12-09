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
		<link rel="stylesheet" type="text/css" href="css\main.css">
		<title>GitFit | Admin Dashboard</title>
	</head>

	<body class="admin-side">
		<nav class="user-nav">
			<h4 class="nav-title2">Admin Dashboard</h4>
			<a class="nav-link" href="usermanagement.php">| Manage Users</a>
			<a class="nav-link" href="logout.php">| Logout</a>
		</nav>
		<div class="admin-content">
			<div class="cont-title">
				<h1>Customer Schedules</h1>
			</div>
			<form class="formValidate" id="formValidate" method="post" action="db/instructor.php">
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
						<?php
						$sql = "SELECT * FROM schedule";
						// Execute the query
						$result = mysqli_query($con, $sql);
						// Check for errors in the SQL query
						if (!$result) {
							die("Error in query: " . mysqli_error($con));
						}

						while ($row = mysqli_fetch_array($result)) {
							echo "<tr>";
							echo '<td>' . $row['name'] . "</td>";
							echo '<td>' . $row['contact'] .  "</td>";
							echo '<td>' . $row['time'] . "</td>";
							echo '<td>' . $row['day'] . "</td>";
							$text1 = " ";
							$text2 = " ";
							$text3 = " ";
							$text4 = " ";
							$text5 = " ";
							switch ($row['instructor']) {
								case "NotAssigned":
									$text1 = 'selected';
									$text2 = " ";
									$text3 = " ";
									$text4 = " ";
									$text5 = " ";
									break;
								case "John":
									$text1 = '';
									$text2 = 'selected';
									$text3 = '';
									$text4 = '';
									$text5 = '';
									break;
								case "Zeph":
									$text1 = '';
									$text2 = '';
									$text3 = 'selected';
									$text4 = '';
									$text5 = '';
									break;
								case "Shane":
									$text1 = '';
									$text2 = '';
									$text3 = '';
									$text4 = 'selected';
									$text5 = '';
									break;
								case "Raphael":
									$text1 = '';
									$text2 = '';
									$text3 = '';
									$text4 = '';
									$text5 = 'selected';
									break;
							}

							// if ($row['instructor'] == "NotAssigned") {
							// 	$text1 = 'selected';
							// 	$text2 = '';
							// 	$text3 = '';
							// 	$text4 = '';
							// 	$text5 = '';
							// } elseif ($row['instructor'] == "John") {
							// 	$text1 = '';
							// 	$text2 = 'selected';
							// 	$text3 = '';
							// 	$text4 = '';
							// 	$text5 = '';
							// } elseif ($row['instructor'] == "Zeph") {
							// 	$text1 = '';
							// 	$text2 = '';
							// 	$text3 = 'selected';
							// 	$text4 = '';
							// 	$text5 = '';
							// } elseif ($row['instructor'] == "Shane") {
							// 	$text1 = '';
							// 	$text2 = '';
							// 	$text3 = '';
							// 	$text4 = 'selected';
							// 	$text5 = '';
							// } else {
							// 	$text1 = '';
							// 	$text2 = '';
							// 	$text3 = '';
							// 	$text4 = '';
							// 	$text5 = 'selected';
							// }
							echo '<td><select name="' . $row['schedID']  . '_instructor">
								<option value="NotAssigned" ' . $text1 . '>Not Assigned</option>
								<option value="John" ' . $text2 . '>John</option>
								<option value="Zeph" ' . $text3 . '>Zeph</option>
								<option value="Shane" ' . $text4 . '>Shane</option>
								<option value="Raphael" ' . $text5 . '>Raphael</option> </select></td>';
							echo "</tr>";
						}
						?>
					</tbody>
				</table>
				<button class="upInstructor" type="submit" name="action">Click to Update.</button>
			</form>
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