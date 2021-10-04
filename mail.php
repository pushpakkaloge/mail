<?php
//get data from form
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "pushpakkaloge@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: pushpakkaloge@gmail.com" . "\r\n" .
"CC: pushpakkaloge@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
