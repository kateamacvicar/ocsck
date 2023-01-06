<?php
// Get data from form 
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
 
$email_from = "km1@wellesley.edu";
$to = "kateamacvicar@gmail.com";
$subject = "New Message";
 
// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message
$txt ="Name:  $name  .\n".  
        "Email: $email .\n". 
        "Message: $message.\n";
 
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";

if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
 
// Redirect to
header("Location: index.html");
?>