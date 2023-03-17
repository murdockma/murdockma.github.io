<?php

// Replace with the email address you want to receive the message
$to = 'you@example.com';

// Get the data submitted through the form
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Construct the email message
$headers = "From: $name <$email>" . "\r\n";
$message_body = "From: $name <$email>\nSubject: $subject\n\n$message";

// Send the email
mail($to, $subject, $message_body, $headers);

// Redirect the user to a "thank you" page
header('Location: thank-you.html');
exit();

?>
