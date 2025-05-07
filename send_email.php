<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formulardaten empfangen und sichern
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // E-Mail-Einstellungen
    $to = "noixgames@gmail.com";  // Ersetze dies mit deiner E-Mail-Adresse
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // E-Mail-Inhalt
    $email_subject = "Neue Nachricht von $name";
    $email_message = "
        <html>
        <head>
        <title>$subject</title>
        </head>
        <body>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Betreff:</strong> $subject</p>
        <p><strong>Nachricht:</strong></p>
        <p>$message</p>
        </body>
        </html>
    ";

    // E-Mail senden
    if (mail($to, $email_subject, $email_message, $headers)) {
        // Nachricht erfolgreich versendet, Benutzer zurück zur Kontakt-Seite schicken
        echo "<script>alert('Nachricht erfolgreich gesendet!'); window.location.href = 'kontakt.html';</script>";
    } else {
        // Fehler beim Versenden der Nachricht
        echo "<script>alert('Es gab ein Problem beim Senden der Nachricht.'); window.location.href = 'kontakt.html';</script>";
    }
}
?>
