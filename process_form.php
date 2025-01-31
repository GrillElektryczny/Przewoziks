<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Adres e-mail, na który chcesz otrzymywać wiadomości
    $to = "to.nie.wasz.mail@gmail.com";
    $subject = "Nowa wiadomość z formularza kontaktowego";
    $body = "Imię: $first_name\nNazwisko: $last_name\nEmail: $email\nWiadomość:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Wiadomość została wysłana!";
    } else {
        echo "Wystąpił problem z wysłaniem wiadomości.";
    }
} else {
    echo "Nieprawidłowe żądanie.";
}
?>