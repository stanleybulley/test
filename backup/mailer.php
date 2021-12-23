<?php
//get data from form  

$name = $_POST['name'];

$to = "stanleybulley2018@gmail.com";
$subject = "Mail From website";
$txt ="number = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>