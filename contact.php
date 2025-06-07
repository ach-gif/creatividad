<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "archiledovi@gmail.com"; // 🔁 Remplace par TON adresse email
    $subject = "Nouveau message depuis le site";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    $body = "Nom: $nom\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Merci ! Votre message a bien été envoyé.";
    } else {
        echo "Une erreur est survenue. Veuillez réessayer.";
    }
}
?>
