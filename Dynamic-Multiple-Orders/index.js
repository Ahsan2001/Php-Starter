
// Pass the Parameter in showModal Function 
<a  href="javascript:;" onClick="showModal('Premium Collateral Package', '$197.99')">Order Now</a>




// Create hidden inputs to store the parameters value 
 <input type="hidden" id="package_name" name="package_name" value="" />
 <input type="hidden" id="package_price" name="package_price" value="" />



// Get parameter and assign the value with .val method  
function showModal(pacakgeName = "", packagePrice = "") {
    $("#package_name").val(pacakgeName);
    $("#package_price").val(packagePrice);
    $('#started_pop').modal('show');
}

$('#started_pop').on('hidden.bs.modal', function() {
    $("#package_name").val("");
    $("#package_price").val("");
});



// Php Mailer Functions 
<?php
$name = $_POST['cn'];
$email = $_POST['em'];
$phone = $_POST['pn'];
$message = $_POST['msg'];
$packageName = "";
$packagePrize = "";

if(isset($_POST['package_name'])){
    $packageName = $_POST['package_name'];
}
if(isset($_POST['package_price'])){
    $packagePrize = $_POST['package_price'];
}
$actual_link = $_SERVER['HTTP_REFERER'];
$formcontent="From: $name \n Email: $email  \n Package Name: $packageName \n  Price:  $packagePrize  \n Phone: $phone  \n Message: $message \n Url : $actual_link ";
$recipient = "info@canvaswebstudios.com";
$subject = "Website Lead Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: https://www.canvaswebstudios.com/thankyou ", true, 301);
?>
