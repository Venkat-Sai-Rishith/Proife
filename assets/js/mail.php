<?php
// Fetching Values From URL
$name = $_POST['name'];
$email = $_POST['email'];
$msg_subject = $_POST['msg_subject'];
$message = $_POST['message'];

$to = "venkatgaminggem17@gmail.com";
$subject = $msg_subject;

// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message
$txt = "Name = " . $name . "\r\n=Email = "
    . $email . "\r\nMessage =" . $message;

$headers = "From: " . $email . "\r\n" .
    "CC: " . "venkatgaminggem17@gmail.com";


if (mail($to, $subject, $txt, $headers)) {
    echo 'Message Submitted!';
}
else{
    echo 'Message Not Submitted, Please Try Agian!';
}
?>