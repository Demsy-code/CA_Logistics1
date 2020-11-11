<?php
$name = $_POST["name"];
$visitor_email = $_POST["name"];
$message = $_POST["message"];



$email_from = "favyalphonsus95@gmail.com";

$email_subject = "New Form Submission";

$email_body = "User Name: $name./n". 
                "User_Email: $visitor_email./n". 
                    "User_Message: $message./n";


$to = "favywhyte@gmail.com";

$headers = "From: $email_from /r/n";

$headers . = "Reply-to: $visitor_email /r/n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");



?>