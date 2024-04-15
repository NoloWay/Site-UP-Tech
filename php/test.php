<?php
require 'vendor/autoload.php'; // Inclure la bibliothèque Mailgun

use Mailgun\Mailgun;

// Créer une instance de Mailgun
$mgClient = Mailgun::create('d3b0a4a92850e19b0f8bf4cdc10e7232-19806d14-e60373a4', 'https://api.mailgun.net', false);

// Définir les paramètres de l'e-mail
$domain = "sandbox254df1778bd94a0f83685478a77bb401.mailgun.org";
$params = [
    'from'      => 'Excited User <noebourgeoispro@gmail.com>',
    'to'        => 'Baz <nolokotoway@gmail.com>',
    'subject'   => 'Hello',
    'text'      => 'Testing some Mailgun awesomeness!'
];

// Envoyer l'e-mail
$result = $mgClient->messages()->send($domain, $params);

// Vérifier si l'e-mail a été envoyé avec succès
if ($result->http_response_code == 200) {
    echo 'L\'e-mail a été envoyé avec succès.';
} else {
    echo 'Une erreur est survenue lors de l\'envoi de l\'e-mail.';
}
?>