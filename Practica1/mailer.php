<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Cargamos las clases de PHPMailer instaladas mediante Composer.
require 'vendor/autoload.php';

// Funció encarregada de configurar i enviar el correu.
function enviarCorreu($nom, $email, $text)
{
    // Creem una nova instància de PHPMailer.
    $mail = new PHPMailer(true);

    try {

        // Configurem PHPMailer per utilitzar el servidor SMTP de Gmail.
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        // Dades del compte que utilitzarem per enviar el correu.
        $mail->Username = 'j.toribio2@sapalomera.cat';
        $mail->Password = 'fisj dwsm tbqi wmef';

        // Configurem la connexió segura i el port del servidor SMTP.
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Indiquem el compte des del qual s'envia el correu.
        $mail->setFrom('j.toribio2@sapalomera.cat', 'Practica PHP');

        // L'adreça introduïda al formulari serà el destinatari.
        $mail->addAddress($email);

        // El nom introduït al formulari serà l'assumpte.
        $mail->Subject = $nom;

        // El text introduït al formulari serà el contingut del correu.
        $mail->Body = $text;

        // Intentem enviar el correu.
        $mail->send();

        // Retornem true si el correu s'ha enviat correctament.
        return true;

    } catch (Exception $e) {

        // Retornem false si hi ha hagut algun error durant l'enviament.
        return false;
    }
}