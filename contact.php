<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$first_name = $_POST["fname"];
	$last_name = $_POST["lname"];
	$email = $_POST["email"];
	$content = $_POST["message"];
	$to = "austinwelsh-graham18@newman.cumbria.sch.uk";
	$subject = "Contact Form Submission";
	$boundary = md5(time());
	$headers = "MIME-VersionL: 1.0\r\n";
	$headers .= "Content-Type: multiplart/mixed; boundary=\"$boundary\"\r\n";
	$message = "--$boundary\r\n";
	$message .= "Content-Type: text/plain; charset=\"UTF-8\"\r\n";
	$message .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
	$message .= "First Name: $first_name\n";
	$message .= "Last Name: $last_name\n";
	$message .= "Email: $email\n";
	$message .= "Message:\n$content";
	$message .="--$boundary--";
	if (mail($to, $subject, $message, $headers)) {
		echo "Message Sent Succesfully";
	} else {
		echo "Error Sending Message" ;
	}
}
?>