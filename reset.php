<?php
$mysqli = new mysqli('sql303.epizy.com', 'epiz_26361815', 'Sqs17dRPPxx', 'epiz_26361815_feedbyme');
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
$password = mysqli_real_escape_string($mysqli, $_POST['password']);
$email =  mysqli_real_escape_string($mysqli, $_POST['email']);
$token = mysqli_real_escape_string($mysqli, $_POST['token']);
if (strlen($password) <= 4) {
    echo 'pshort';
} else {
    $spassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
    $query = "update register set password='$spassword' where email='$email' and token='$token' and token<>'' and tokentime > NOW() ";
    $result = mysqli_query($mysqli, $query);
    if ($result) {
        $query = "update register set token='' and tokentime='' where email='$email'";
        $result = mysqli_query($mysqli, $query);
    }
    if ($result) {
        echo 'true';
    } else {
        echo 'false';
    }
}
