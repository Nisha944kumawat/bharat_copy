<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Error reporting ON
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = htmlspecialchars($_POST['form_name'] ?? '');
    $email   = htmlspecialchars($_POST['form_email'] ?? '');
    $phone   = htmlspecialchars($_POST['form_phone'] ?? '');
    $address = htmlspecialchars($_POST['form_address'] ?? '');
    $message = htmlspecialchars($_POST['form_message'] ?? '');

    $mail = new PHPMailer(true);

    try {

        // Debug logs
        $mail->SMTPDebug = 2;
        $mail->Debugoutput = 'error_log';

        // =========================
        // BREVO SMTP SETTINGS
        // =========================
        $mail->isSMTP();
        $mail->Host = 'smtp-relay.brevo.com';
        $mail->SMTPAuth = true;

        $mail->Username = 'ad63e3001@smtp-brevo.com';

        // Yahan apni generated Brevo SMTP key paste karo
        $mail->Password = getenv('BREVO_SMTP_KEY');    
        // Option 2
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Sender Email (Brevo me verify hona chahiye)
        $mail->setFrom(
            'agilesolutions03@gmail.com',
            'Bharat Copy Website'
        );

        // Mail receive yahan hogi
        $mail->addAddress('sales@bharatcopy.com');
        // User ko reply kar sake
        if (!empty($email)) {
            $mail->addReplyTo($email, $name);
        }

        $mail->isHTML(true);

        $mail->Subject = "New Contact Form Enquiry";

        $mail->Body = "
        <h2>New Contact Form Submission</h2>

        <table border='1' cellpadding='10' cellspacing='0' style='border-collapse:collapse;'>

            <tr>
                <td><b>Name</b></td>
                <td>{$name}</td>
            </tr>

            <tr>
                <td><b>Email</b></td>
                <td>{$email}</td>
            </tr>

            <tr>
                <td><b>Phone</b></td>
                <td>{$phone}</td>
            </tr>

            <tr>
                <td><b>Address</b></td>
                <td>{$address}</td>
            </tr>

            <tr>
                <td><b>Message</b></td>
                <td>{$message}</td>
            </tr>

        </table>
        ";

        $mail->AltBody =
            "Name: $name\n" .
            "Email: $email\n" .
            "Phone: $phone\n" .
            "Address: $address\n" .
            "Message: $message";

        $mail->send();

        echo "
        <script>
            alert('Message Sent Successfully');
            window.location.href='contact.php';
        </script>
        ";

    } catch (Exception $e) {

        echo "<h3>Mailer Error</h3>";
        echo "<pre>";
        echo $mail->ErrorInfo;
        echo "</pre>";

        error_log('PHPMailer Error: ' . $mail->ErrorInfo);
    }
}
?>