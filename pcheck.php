<?php
$username = $_POST['username'];
$password = $_POST['password'];
$mysqli = new mysqli('sql303.epizy.com', 'epiz_26361815', 'Sqs17dRPPxx', 'epiz_26361815_feedbyme');
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
$query = "SELECT * FROM register WHERE username='$username'";
$result = mysqli_query($mysqli, $query);
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($username == '' || $password == '') {
    echo 'details';
} else {
    if ($num_row >= 1) {
        if (password_verify($password, $row['password'])) {
            echo 'true';
        } else {
            echo 'false';
        }
    } else {
        echo 'falsed';
    }
}
