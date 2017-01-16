<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "ianvleeshouwers@hotmail.com";
$subject = "New Message"

mail($to, $subject, $message);
echo "Email is verstuurd";
    
?>