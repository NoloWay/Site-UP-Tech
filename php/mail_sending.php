<?php
require 'vendor/autoload.php'; // Inclure la bibliothèque Mailgun

use Mailgun\Mailgun;

// Vérifier si des données ont été soumises via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $Date = $_POST['Date'];
    $Heure = $_POST['Heure'];

    // Créer une instance de Mailgun
    $mailgun = new Mailgun('d3b0a4a92850e19b0f8bf4cdc10e7232-19806d14-e60373a4');

    // Paramètres de l'e-mail
    $destinataire = 'nolokotoway@gmail.com';
    $expediteur = $email;
    $sujet = 'Réservation d\un créneau';
    $corps_message = "Nom : $nom\n";
    $corps_message .= "Email : $email\n";
    $corps_message .= "Date : $Date\n";
    $corps_message .= "Heure : $Heure\n";

    // Paramètres de l'e-mail à envoyer via Mailgun
    $params = [
        'from'    => 'Your Name <' . $expediteur . '>',
        'to'      => $destinataire,
        'subject' => $sujet,
        'text'    => $corps_message
    ];

    // Envoyer l'e-mail via Mailgun
    $result = $mailgun->messages()->send('sandbox254df1778bd94a0f83685478a77bb401.mailgun.org', $params);

    // Vérifier si l'e-mail a été envoyé avec succès
    if ($result->http_response_code == 200) {
        echo 'L\'e-mail a été envoyé avec succès.';
    } else {
        echo 'Une erreur est survenue lors de l\'envoi de l\'e-mail : ' . $result->http_response_body->message;
    }
}
?>