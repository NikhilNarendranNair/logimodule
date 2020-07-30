<?php
$mysqli = new mysqli('sql303.epizy.com', 'epiz_26361815', 'Sqs17dRPPxx', 'epiz_26361815_feedbyme');

if ($mysqli->connect_error) {
	die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$usernamer = mysqli_real_escape_string($mysqli, $_POST['usernamer']);
$passwordr = mysqli_real_escape_string($mysqli, $_POST['passwordr']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);

if (strlen($usernamer) < 2) {
	echo 'fname';
} elseif (strlen($email) <= 4) {
	echo 'eshort';
} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
	echo 'eformat';
} elseif (strlen($passwordr) <= 4) {
	echo 'pshort';
} else {
	$spassword = password_hash($passwordr, PASSWORD_BCRYPT, array('cost' => 12));
	$query = "SELECT * FROM register WHERE email='$email' OR username='$usernamer'";
	$result = mysqli_query($mysqli, $query);
	$num_row = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	if ($num_row < 1) {
		$insert_row = $mysqli->query("INSERT INTO register (username, password, email) VALUES ('$usernamer', '$spassword', '$email')");
		if ($insert_row) {
			echo 'true';
		}
	} else {
		echo 'false';
	}
}
