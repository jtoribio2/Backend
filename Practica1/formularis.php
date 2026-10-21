<?php

// Incloem la funció encarregada d'enviar el correu.
require 'mailer.php';

// Comprovem que les dades s'hagin enviat mitjançant POST.
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Recollim les dades enviades pel formulari.
    $nom = $_POST["nom"] ?? "";
    $email = $_POST["email"] ?? "";
    $text = $_POST["text"] ?? "";
    // Array on guardarem els possibles errors de validació.
    $errors = [];

    // Comprovem que el camp nom no estigui buit.
    if (empty($nom)) {
        $errors[] = "El nom està buit";
    }

    // Comprovem que l'email no estigui buit i que tingui un format correcte.
    if (empty($email)) {
        $errors[] = "L'email està buit";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'email no és vàlid";
    }

    // Comprovem que el camp text no estigui buit.
    if (empty($text)) {
        $errors[] = "El text està buit";
    }

    // Si hi ha errors, tornem a mostrar el formulari amb els errors.
    if (!empty($errors)) {

        include "index.php";
    } else {

        // Si les dades són correctes, intentem enviar el correu.
        if (enviarCorreu($nom, $email, $text)) {

            // Informem que el correu s'ha enviat correctament.
            $missatge = "Enviat correctament";
        } else {

            // Informem si hi ha hagut un error durant l'enviament.
            $errors[] = "Hi ha hagut un error en enviar el correu";
        }

        // Tornem a mostrar la vista del formulari.
        include "index.php";
    }
}
