<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

if (isset($_POST['pop_name'])) {
    $name = $_POST['pop_name'];
} elseif (isset($_POST['contact_name'])) {
    $name = $_POST['contact_name'];
} elseif (isset($_POST['M_name'])) {
    $name = $_POST['M_name'];
}


if (isset($_POST['pop_email'])) {
    $email = $_POST['pop_email'];
} elseif (isset($_POST['contact_email'])) {
    $email = $_POST['contact_email'];
} elseif (isset($_POST['M_email'])) {
    $email = $_POST['M_email'];
}

if (isset($_POST['pop_phone'])) {
    $phone = $_POST['pop_phone'];
} elseif (isset($_POST['contact_number'])) {
    $phone = $_POST['contact_number'];
} elseif (isset($_POST['M_phone'])) {
    $phone = $_POST['M_phone'];
}

$mail = new PHPMailer();


$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "TLS";
$mail->Port = 587;
$mail->Host = "smtp.gmail.com";
$mail->Username = "your email";
$mail->Password = "your password";


$mail->IsHTML(true);

$mail->AddAddress("To email", "To Email User Name");

$mail->AddCC("Email", "User Name");
$mail->AddCC("Email", "User Name");

$mail->Subject = "Subject";

$content = "From: $name \n Email: $email \n Phone: $phone";

if (isset($_POST['pop_msg'])) {
    $message = $_POST['pop_msg'];
    $content.="\n Message: $message";
}


$mail->MsgHTML($content);


if($mail->Send()){

    header('Location: redirection url');
    exit;
}

