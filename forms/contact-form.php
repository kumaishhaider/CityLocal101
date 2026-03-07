<?php
include '../includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $to = $contactEmail;
    $subject = "New Contact Form Message from CityLocal101";

    $body = "You received a new message from your website.\n\n";
    $body .= "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n\n";
    $body .= "Message:\n" . $message;

    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: ../thank-you.php");
        exit();
    } else {
        echo "Sorry, your message could not be sent.";
    }
} else {
    header("Location: ../contact.php");
    exit();
}
?>