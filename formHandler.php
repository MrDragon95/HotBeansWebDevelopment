<?php

$name = $_POST["name"];
$visitor_email = $_POST["email"];
$number = $_POST["name"];
$cv = $_POST["cv"];
$message = $_POST["message"];

$email_from = "info@yourweb.com";

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
                "user Email: $visitor_email.\n".
                "user number: $number.\n".
                "user cv: $cv.\n".
                "user message: $message.\n";

$to = "austinatts@engineer.com";

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: applyNow.html");

?>