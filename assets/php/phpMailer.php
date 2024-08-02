<?php
header('Content-Type: application/json');
require '../../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../vendor/phpmailer/PHPMailer/src/Exception.php';
require '../../vendor/phpmailer/PHPMailer/src/PHPMailer.php';
require '../../vendor/phpmailer/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);
    try {
        // Configuration du serveur SMTP
        $mail->isSMTP();
        $mail->Host         = 'smtp.gmail.com';  // Spécifiez le serveur SMTP principal
        $mail->SMTPAuth     = true;
        $mail->Username     = 'sauvagehugopro@gmail.com'; // Votre adresse email SMTP
        $mail->Password     = 'bkrw uidy twwv qbnh';      // Votre mot de passe SMTP
        $mail->SMTPSecure   = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port         = 465;

        // Destinataires
        $mail->setFrom($email, $name);
        $mail->addAddress('sauvagehugopro@gmail.com', 'Les toiles');

        // Contenu de l'email
        $mail->isHTML(true);
        $mail->Subject = 'Nouveau message de contact';
        $mail->Body    = "Nom: $name<br>Email: $email<br>Message: $message";

        $mail->send();
        echo 'Message envoyé avec succès';
    } catch (Exception $e) {
        echo "Le message n'a pas pu être envoyé. Erreur Mailer: {$mail->ErrorInfo}";
    }
}