<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $services = $_POST['services'];
    $budget = $_POST['budget'];
    $brief = $_POST['brief'];
    $formcontent="From: $name \n Email: $email \n Phone: $phone \n Services: $services \n Budget: $budget \n Message: $brief";
    $recipient = "ahsan.sabir@switchbytes.com";
    $subject = "Website Lead Form";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!";
    header("Location: https://webdesignpreviews.com/html/thehouseofauthors", true, 301);
?> 
