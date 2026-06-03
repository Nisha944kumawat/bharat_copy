<?php 
include("components.php");
// Retrieve form data
$name = $_POST["form_name"];
$email = $_POST["form_email"];
$phone = $_POST["form_phone"];
$address = $_POST["form_address"];
$message = $_POST["form_message"];

// URL encode the variables to make them URL-safe
$name = urlencode($name);
$email = urlencode($email);
$phone = urlencode($phone);
$address = urlencode($address);
$message = urlencode($message);

// Add emojis and bold text for "New Lead Alert"
$whatsapp_message = "*New Lead Alert* %0A%0A";
$whatsapp_message .= "*Name*: $name%0A";
$whatsapp_message .= "*Email*: $email%0A";
$whatsapp_message .= "*Phone*: $phone%0A";
$whatsapp_message .= "*Address*: $address%0A";
$whatsapp_message .= "*Message*: $message";

// WhatsApp link
if ($name && $email && $phone && $address && $message) {
    ?>
    <script>
    // Use JavaScript to redirect to the WhatsApp URL
    window.location = "https://wa.me/<?php echo $mobilenumber1; ?>?text=<?php echo $whatsapp_message ?>";
    </script>
    <?php
}
?>