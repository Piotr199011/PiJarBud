<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "piotr.jarmosz@o2.pl.com"; // Wpisz swój adres e-mail
    $subject = "Nowa wiadomość z formularza kontaktowego";
    $body = "Od: $name\nE-mail: $email\n\nTreść wiadomości:\n$message";

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    if (mail($to, $subject, $body, $headers)) {
        echo "Wiadomość została wysłana!";
    } else {
        echo "Błąd wysyłania wiadomości.";
    }
}
?>
