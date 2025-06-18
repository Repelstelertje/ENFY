<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Haal de ingevulde gegevens uit het formulier
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $email = str_replace(["\r", "\n"], '', $email); // verwijder nieuwe regels voor veiligheid
    $message = trim($_POST["message"]);
    $honeypot = isset($_POST["website"]) ? trim($_POST["website"]) : '';

    // Controleer of alle velden ingevuld zijn
    if (empty($name) || empty($email) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL) || !empty($honeypot)) {
        http_response_code(400);
        echo "Er was een probleem met je inzending. Zorg ervoor dat alle velden correct zijn ingevuld.";
        exit;
    }

    // Laad configuratie
    require_once __DIR__ . '/config.php';
    // $recipient wordt ingeladen uit config.php

    // Onderwerp van de e-mail
    $subject = "Nieuw contactbericht van $name";

    // E-mailinhoud
    $email_content = "Naam: $name\n";
    $email_content .= "E-mail: $email\n\n";
    $email_content .= "Bericht:\n$message\n";

    // E-mailheaders
    $email_headers = "From: $name <$email>";

    // Verzend de e-mail
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        http_response_code(200);
        echo "Bedankt! Je bericht is verzonden.";
    } else {
        http_response_code(500);
        echo "Er is iets misgegaan. Probeer het later opnieuw.";
    }
} else {
    http_response_code(403);
    echo "Er was een probleem met je inzending. Probeer het opnieuw.";
}
?>
