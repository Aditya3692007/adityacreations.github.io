<?php 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $POST['message'];

$email_form = 'adityaparmercy@gmail.com';

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n";
                 "User Message: $message.\n";


$to = "adityaparmercy2@gmail.com";

$headers = "From: $email_form\r\n";

$headers .= "Reply-To: $visitor_email\r\n";

mail ($to,$email_subject,$email_body,$headers);
    
header("Location: inde.html");

?>
