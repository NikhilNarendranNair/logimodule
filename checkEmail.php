<?php

use PHPMailer\PHPMailer\PHPMailer;

$email = $_POST['email'];
$mysqli = new mysqli('sql303.epizy.com', 'epiz_26361815', 'Sqs17dRPPxx', 'epiz_26361815_feedbyme');
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_errno);
}
$query = "SELECT * FROM register WHERE email = '$email'";
$result = mysqli_query($mysqli, $query);
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($num_row >= 1) {
    $token = "qwertyuiopasdfghjklzxcvbnmQWERTSDFSGJVZX154278963";
    $token = str_shuffle($token);
    $token = substr($token, $start = 0, $length = 10);
    $query = "update register set token='$token',tokentime=DATE_ADD(NOW(), INTERVAL 5 MINUTE) where email='$email'";
    $result = mysqli_query($mysqli, $query);
    if ($result) {
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/Exception.php";
        $mail = new PHPMailer();
        $mail->addAddress($email);
        $mail->setFrom($address = "nairnick1997@gmail.com", $name = "Nikhil");
        $mail->Subject = "Reset Password";
        $mail->isHTML($isHTML = true);
        $mail->Body = "
            Hi,<br><br>
            <strong>Greetings from Feedbyme!!!</strong><br><br>
            In order to reset your password, please click on the below link.<br>
            <a href='http://feedbyme.epizy.com/resetpassword.php?email=$email&token=$token'>Click Here</a><br><br>
            Thanks and Regards,<br>
            Feedbyme.
            ";
        if ($mail->send()) {
            echo 'true';
        } else {
            echo 'err';
        }
    }
} elseif (strlen($email) <= 4) {
    echo 'eshort';
} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';
} else {
    echo 'false';
}
