<?php
include 'connection.php';
foreach ($_POST as $key => $value) {
	$check = "SELECT * FROM users";
	$result = mysqli_query($con, $check);
	while ($row = mysqli_fetch_array($result)) {
		if (!$result) {
			die("Error in query: " . mysqli_error($con));
		}
		if (preg_match("/[0-9]+_payment/", $key)) {
			$value = htmlspecialchars($value);
			if ($value == $row['payment']) {
				$key = strtok($key, '_');
				$sql = 'UPDATE users SET payment = "' . $row['payment'] . '" WHERE id = ' . $key;;
				$con->query($sql);
			} else {
				$key = strtok($key, '_');
				$sql = 'UPDATE users SET payment = "' . $value . '" WHERE id = ' . $key;;
				$con->query($sql);
			}
		}

		if (preg_match("/[0-9]+_status/", $key)) {
			$value = htmlspecialchars($value);
			if ($value != $row['status']) {
				$key = strtok($key, '_');
				$sql = 'UPDATE users SET status = "' . $value . '" WHERE id = ' . $key;;
				$con->query($sql);
			} else {
				$key = strtok($key, '_');
				$sql = 'UPDATE users SET status = "' . $row['status']  . '" WHERE id = ' . $key;;
				$con->query($sql);
			}
		}
	}
}
header("location: ../admin.php");
