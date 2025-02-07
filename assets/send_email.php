<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["Contact-Name"]);
    $email = filter_var($_POST["Contact-Email"], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars($_POST["contact_subject"]);
    $message = htmlspecialchars($_POST["Contact-Message"]);
//info@motorconnect.co.za
    $to = "markchindudzi716@gmail";
    $headers = "From: $email" . "\r\n" . "Reply-To: $email";
    $fullMessage = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message.";
    }
} else {
    echo "Invalid request.";
}
?>
