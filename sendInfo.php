<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $to = "bneogi102002@gmail.com";
    $subject = "New Subscription";
    $message = "A new email subscription request from: $email";
    $headers = "From: neogibishakh@gmail.com"; // Change this to your email address

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed.";
    }
} else {
    echo "Invalid request.";
}
?>