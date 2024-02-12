<?php
session_start();

// Vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Traitez la réservation ou l'annulation
    if (isset($_POST['reserve'])) {
        // Ajouter la réservation avec le nom du réservateur
        $reservationKey = $_POST['date'] . '-' . $_POST['hour'];
        $_SESSION['reservations'][$reservationKey] = [
            'date' => $_POST['date'],
            'hour' => $_POST['hour'],
            'name' => $_POST['name'],
        ];
    } elseif (isset($_POST['cancel'])) {
        // Annuler la réservation
        $reservationKey = $_POST['date'] . '-' . $_POST['hour'];
        unset($_SESSION['reservations'][$reservationKey]);
    }
}

// Récupère le mois et l'année actuels ou ceux soumis par le formulaire
$currentMonth = isset($_GET['month']) ? $_GET['month'] : date('m');
$currentYear = isset($_GET['year']) ? $_GET['year'] : date('Y');

// Récupère la première semaine du mois
$firstDayOfMonth = date('N', strtotime("$currentYear-$currentMonth-01"));
$startOfWeek = date('Y-m-d', strtotime("-$firstDayOfMonth days", strtotime("$currentYear-$currentMonth-01")));

// Ajoute une semaine pour obtenir la semaine suivante
$startOfNextWeek = date('Y-m-d', strtotime("$startOfWeek +1 week"));

// Initialise la variable de jour à la première journée de la semaine
$day = $startOfWeek;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier de Réservation - <?php echo date('F Y', strtotime("$currentYear-$currentMonth-01")); ?></title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 1em;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        /* Styles modifiés */
        .hourly-reservation {
            font-size: 14px;
            margin-bottom: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .hourly-reservation button {
            margin-top: 5px;
            padding: 5px 10px;
            font-size: 12px;
        }

        .reserved {
            background-color: #ff9999;
        }

        .reserved span {
            display: block;
            margin-top: 5px;
        }

        /* Nouveau style pour aligner le premier créneau */
        .first-cell {
            vertical-align: top;
        }

        .first-column td {
            height: 100%;
        }

        .align-top {
            vertical-align: top;
            margin-left: 20px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Calendrier de Réservation - <?php echo date('F Y', strtotime("$currentYear-$currentMonth-01")); ?></h1>
    </header>

    <a href="?month=<?= date('m', strtotime($startOfNextWeek)) ?>&year=<?= date('Y', strtotime($startOfNextWeek)) ?>">Semaine suivante</a>

    <table>
        <thead>
            <tr>
                <th>Lun</th>
                <th>Mar</th>
                <th>Mer</th>
                <th>Jeu</th>
                <th>Ven</th>
                <th>Sam</th>
                <th>Dim</th>
            </tr>
        </thead>
        <tbody>

            <?php
            // Vérifie si la clé 'reservations' existe dans la variable de session
            if (!isset($_SESSION['reservations'])) {
                $_SESSION['reservations'] = [];
            }

            // Boucle sur les jours de la semaine
            echo '<tr>';
            for ($j = 1; $j <= 7; $j++) {
                // Cellule avec le numéro du jour
                $date = date('Y-m-d', strtotime($day));
                $reservedClass = array_key_exists($date, $_SESSION['reservations']) ? 'reserved' : '';
                $firstCellClass = ($j == 1) ? 'align-top' : ''; // Ajout de la classe align-top

                echo '<td class="' . $reservedClass . ' ' . $firstCellClass . '">';
                echo date('d', strtotime($day));

                // Affiche les créneaux de réservation pour chaque jour de 8h à 20h
                echo '<div class="hourly-reservation">';
                for ($hour = 8; $hour <= 20; $hour += 2) {
                    $hourlyKey = $date . '-' . $hour;
                    $hourlyReservedData = $_SESSION['reservations'][$hourlyKey] ?? null;
                    $hourlyReservedClass = $hourlyReservedData ? 'reserved' : '';

                    // Affiche le formulaire de réservation ou d'annulation pour chaque créneau
                    echo '<form method="post" action="index.php">';
                    echo '<input type="hidden" name="date" value="' . $date . '">';
                    echo '<input type="hidden" name="hour" value="' . $hour . '">';

                    echo '<div class="' . $hourlyReservedClass . '">';
                    echo '<span>' . $hour . ':00 - ' . ($hour + 2) . ':00</span>';

                    if ($hourlyReservedData) {
                        // Si réservé, affiche le nom du réservateur et ajoute le bouton d'annulation
                        $reservedName = $hourlyReservedData['name'];
                        echo '<span>Réservé par: ' . $reservedName . '</span>';
                        echo '<button type="submit" name="cancel">Annuler</button>';
                    } else {
                        // Sinon, ajoute le champ de saisie du nom et le bouton de réservation
                        echo '<input type="text" name="name" placeholder="Votre nom" required>';
                        echo '<button type="submit" name="reserve">Réserver</button>';
                    }

                    echo '</div>';
                    echo '</form>';
                }
                echo '</div>';

                echo '</td>';

                // Passe au jour suivant
                $day = date('Y-m-d', strtotime("$day +1 day"));
            }
            echo '</tr>';
            ?>

        </tbody>
    </table>

</body>
</html>