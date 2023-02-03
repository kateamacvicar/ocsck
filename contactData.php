<?php

//if statement checks that someone actually submitted something. 
if(isset($_POST['submit'])){
    // Get data from form 
$name = $_POST['name'];
$subject= $_POST['subject'];
$mailFrom = $_POST['email'];
$message= $_POST['message'];

//won't work with a gmail address
$mailTo = "mail@ottercreeksmallcraft.com";
$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);

//redirect to:
header("Location: thankYou.html");
}

?>