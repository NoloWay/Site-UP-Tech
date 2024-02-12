<?php
// Récupérer la date de début de la semaine depuis la requête AJAX
$weekStartDate = isset($_GET['start_date']) ? $_GET['start_date'] : date('Y-m-d');

// Convertir la date de début en objet DateTime
$startDate = new DateTime($weekStartDate);

// Générer les jours de la semaine
$days = [];
for ($i = 0; $i < 7; $i++) {
    $days[] = $startDate->format('Y-m-d');
    $startDate->modify('+1 day');
}

// Générer le contenu HTML du calendrier
$html = '<table>';
$html .= '<tr><th>Lundi</th><th>Mardi</th><th>Mercredi</th><th>Jeudi</th><th>Vendredi</th></tr>';
$html .= '<tr>';
foreach ($days as $day) {
    $html .= '<td>' . date('d', strtotime($day)) . '</td>';
}
$html .= '</tr>';
$html .= '</table>';

// Envoyer le HTML du calendrier au client (JavaScript)
echo $html;
?>
