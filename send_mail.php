<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $caminoInterest = htmlspecialchars($_POST['camino-interest']);
    $message = htmlspecialchars($_POST['message']);

    // Your email address where the form will be sent
    $to = "robvclarke@gmail.com"; 
    $subject = "New Contact Form Submission 3 Caminos";
    
    // Email body content
    $body = "You have received a new message from the contact form on your website.\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Camino of Interest: $caminoInterest\n";
    $body .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        // Redirect or display a success message
        echo "Message sent successfully!";
    } else {
        // Display an error message
        echo "Failed to send the message. Please try again.";
    }
} else {
    // If the form was not submitted via POST, do nothing
    echo "Something went wrong. Please try again.";
}
?>
