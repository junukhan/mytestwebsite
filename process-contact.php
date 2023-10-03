<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Send an email (configure email settings here)
    mail("junuk886@gmail.com", "Contact Form Submission", $message, "From: $email");

    // Provide a response message
    echo "Thank you for your message! We'll get back to you soon.";
} else {
    // Handle invalid requests
    http_response_code(400);
    echo "Invalid request.";
}
?>
