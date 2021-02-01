<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$city = $_POST['city'];
$message = $_POST['message'];

$formcontent="From: $name , EMail: $email Phone: $phone, Country: $country , City: $city, Message: $message. ";
$subject = "Request";
$mailheader = "From: $name ";

if (isset($_POST['submit_request'])) {
mail('erito31@gmail.com', $subject, $formcontent ) or die ("Error!");
}
echo "<script type='text/javascript'>alert('Mail sent successfully!')</script>";
?>