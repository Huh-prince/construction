<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Set email parameters
    $to = "prince2692003@gmail.com";  // Replace with your email address
    $subject = "New Enquiry from " . $name;
    $headers = "From: " . $email;
    $body = "You have received a new message from " . $name . ":\n\n" . $message;

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
