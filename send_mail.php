<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/Applications/XAMPP/xamppfiles/htdocs/weldingwb2/PHPMailer/src/Exception.php';
require '/Applications/XAMPP/xamppfiles/htdocs/weldingwb2/PHPMailer/src/PHPMailer.php';
require '/Applications/XAMPP/xamppfiles/htdocs/weldingwb2/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);
    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'imrannaz.cool@gmail.com';
        $mail->Password = 'vcbl zhgz kted qyll';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom('imrannaz.cool@gmail.com', 'Welding Service');
        $mail->addAddress('imrannazari25@icloud.com');
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = 'New Welding Service Request';
        $mail->Body = "
        <h1>New Welding Service Request</h1>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Service:</strong> $service</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Message:</strong> $message</p>";

        $mail->send();
        echo 'Thank you! Your request has been sent.';
    } catch (Exception $e) {
        echo "Error: Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
