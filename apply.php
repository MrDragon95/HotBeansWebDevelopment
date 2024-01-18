<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['First_Name'];
    $last_name = $_POST['Last_Name'];
    $email = $_POST['Email_Address'];
    $position = $_POST['Position'];
    $salary = $_POST['Salary'];
    $start_date = $_POST['StartDate'];
    $phone = $_POST['Phone'];
    $country = $_POST['country'];
    $relocate = $_POST['Relocate'];
    $organization = $_POST['Organization'];
    $reference = $_POST['Reference'];
    $file_name = $_FILES['myfile']['name'];
    $file_temp = $_FILES['myfile']['tmp_name'];
    $file_size = $_FILES['myfile']['size'];
    $file_type = $_FILES['myfile']['type'];
    if ($file_name !== "") {
        $upload_path = "uploads/";
        $file_destination = $upload_path . uniqid() . "_" . $file_name;
        move_uploaded_file($file_temp, $file_destination);
    }
    $to = "austinwelsh-graham18@newman.cumbria.sch.uk";
    $subject = "Job Application Form Submission";
    $boundary = md5(time());
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
    $message = "--$boundary\r\n";
    $message .= "Content-Type: text/plain; charset=\"UTF-8\"\r\n";
    $message .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
    $message .= "First Name: $first_name\n";
    $message .= "Last Name: $last_name\n";
    $message .= "Email: $email\n";
    $message .= "Position: $position\n";
    $message .= "Salary: $salary\n";
    $message .= "Start Date: $start_date\n";
    $message .= "Phone: $phone\n";
    $message .= "Country: $country\n";
    $message .= "Willing to Relocate: $relocate\n";
    $message .= "Last Company Worked For: $organization\n";
    $message .= "Reference/Comments/Questions:\n$reference";
    if ($file_name !== "") {
        $file_contents = file_get_contents($file_destination);
        $file_encoded = chunk_split(base64_encode($file_contents));
        $message .= "\r\n\r\n--$boundary\r\n";
        $message .= "Content-Type: $file_type; name=\"$file_name\"\r\n";
        $message .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n";
        $message .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $message .= $file_encoded . "\r\n";
    }
    $message .= "--$boundary--";
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Error sending email.";
    }
    if ($file_name !== "") {
        unlink($file_destination);
    }
}
?>
