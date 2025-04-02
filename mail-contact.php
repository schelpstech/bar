<?php
// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include Composer autoloader
require 'vendor/autoload.php';

// Check if the form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and assign form data
    $name = isset($_POST['name']) ? sanitize_input($_POST['name']) : '';
    $email = isset($_POST['email']) ? sanitize_input($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? sanitize_input($_POST['phone']) : '';
    $note = isset($_POST['note']) ? sanitize_input($_POST['note']) : '';

    // Check if any required fields are empty
    if (empty($name) || empty($email) || empty($phone) || empty($note)) {
        echo 'All fields are required!';
        exit;
    }

    // Set up PHPMailer
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP();                                           // Send using SMTP
        $mail->Host       =  'mail.barchambers.com.ng';                       // Set the SMTP server (for Gmail)
        $mail->SMTPAuth   = true;                                    // Enable SMTP authentication
        $mail->Username   = 'esender@barchambers.com.ng';                   // SMTP username (use your Gmail or custom SMTP credentials)
        $mail->Password   = 'LoveGod2025@';                 // SMTP password (consider using an app-specific password for Gmail)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;             // Use SSL encryption
        $mail->Port       = 465;                                     // TCP port for SSL (465 is the SSL port)

        //Recipients
        $mail->setFrom($email, $name);                               // Sender's email and name
        $mail->addAddress('admin@barufai.com.ng');                 // Recipient's email (your email or admin email)

        // Content
        $mail->isHTML(true);                                         // Set email format to HTML
        $mail->Subject = 'New Contact Email';
        $mail->Body    = "
            <strong>Name:</strong> $name<br>
            <strong>Email:</strong> $email<br>
            <strong>Phone:</strong> $phone<br>
            <strong>Message:</strong><br>$note
        ";

        // Send the email
        $mail->send();
        echo 'Thank you for your appointment request! We will get back to you shortly.';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

// Helper function to sanitize form input
function sanitize_input($data) {
    return htmlspecialchars(trim($data));
}
?>
