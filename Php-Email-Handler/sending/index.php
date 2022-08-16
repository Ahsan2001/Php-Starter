<?php
$name = $_POST['cn'];
$email = $_POST['em'];
$phone = $_POST['pn'];
$message = $_POST['msg'];
$requirement = $_POST['requirement'];
$needs = $_POST['needs'];
$bussiness = $_POST['business_info']; 
$industry = $_POST['industry']; 
$price = $_POST['price']; 
$actual_link = $_SERVER[HTTP_REFERER];
// var_dump($actual_link);die;
$formcontent="From: $name \n Email: $email  \n Phone: $phone  \n Message: $message \n Website Requirement: $requirement \n Website Needs: $needs  \n Website Bussines: $bussiness \n Industry: $industry \n Price: $price \n Url : $actual_link ";
$recipient = "info@infinitywebstudios.com";
$subject = "Website Lead Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: https://infinitywebstudios.com/ThankYou ", true, 301);
?>
