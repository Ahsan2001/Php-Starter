<?php

$name = isset($_POST['cn'])?$_POST['cn']:"";
$email = isset($_POST['em'])?$_POST['em']:"";
$phone = isset($_POST['pn'])?$_POST['pn']:"";
$message = isset($_POST['msg'])?$_POST['msg']:"";

$actual_link = $_SERVER['HTTP_REFERER'];

if(!empty($email)){
    $formContent = "From: $name \n Email: $email \n Phone: $phone \n Message: $message ";
    $recipient = "ahsan.sabir@switchbytes.com";
    $subject = "Website Lead Form testing";
    $mailHeader = "From: $email \r\n";

    mail($recipient, $subject, $formContent, $mailHeader) or die("Error!");
}

header("Location: https://webdesignpreviews.com/html/james-morris/v3/ ", true, 301);
