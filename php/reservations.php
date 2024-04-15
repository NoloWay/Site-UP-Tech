<!DOCTYPE html>
<html>
    <head>
        <title>Réservations</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap">
        <link rel="stylesheet" href="../style/commun.css">
        <link rel="stylesheet" href="../style/reservations.css">
    </head>

    

    <body>
        <header class="header" id="div2">
            <a href="index.php"> <!-- Ajout de la balise <a> autour du titre -->
                <h1><img class="logo" src="../images/logo_UPTech.png"></h1>
            </a>
            <nav>
                <a href="index.php">Accueil</a>
                <a href="realisations.php">Réalisations</a>
                <a href="UP_Tech.php">UP Tech</a>
                <a href="3D_Forge_Studio.php">3D Forge Studio</a>
                <a href="contact.php">Contact</a>
                <a href="reservations.php">Réservations</a>
            </nav>
            <a href="https://junior-entreprises.com/">
                <h1><img class="logo" src="../images/logo_JE.png"></h1>
            </a>
            <a href="https://www.univ-poitiers.fr/">
                <h1><img class="logo" src="../images/logo_univ.png"></h1>
            </a>
        </header>
        <main>
            <div class="header-wrapper" id="div1"></div>
            
            

            <div class="container mt-5">
                <h2>Formulaire de prise de rendez-vous</h2>
                <div class="calendar">
                    <div>
                        <button class="navigation-button" onclick="prevWeek()">← Semaine précédente</button>
                        <button class="navigation-button" onclick="nextWeek()">Semaine suivante →</button>
                    </div>
                    <div id="weekView"></div>
                </div>
                
                <script>
                    function generateCalendar() {
                        let weekView = '';

                        weekView += '<div class="week">';
                        weekView += '<div class="days">';
                        for (let i = 0; i < 7; i++) {
                            if (i==0){
                                weekView += `<div class="day"></div>`;
                            }
                            weekView += `<div class="day">${currentDate.toLocaleDateString('fr', { weekday: 'short', month: 'short', day: 'numeric' })}</div>`;
                            currentDate.setDate(currentDate.getDate() + 1);
                        }
                        weekView += '</div>';
                        weekView += '<div class="time-slots">';
                        for (let j = 8; j < 18; j++) {
                            weekView += '<div class="time-slot">';
                            for (let k = 0; k<8; k++) {
                                if (k==0) {
                                    weekView += `<div class="time">${j.toString().padStart(2, '0')}:00 - ${(j + 1).toString().padStart(2, '0')}:00</div>`;
                                }
                                else {
                                    weekView += `<div class="time"></div>`;
                                }
                            }
                            weekView += '</div>';
                        }
                        weekView += '</div>';
                        weekView += '</div>';
                    
                    
                        document.getElementById('weekView').innerHTML = weekView;
                    }
                    
                    function prevWeek() {
                        currentDate.setDate(currentDate.getDate() - 14); // Passage à la semaine précédente
                        generateCalendar();
                    }

                    function nextWeek() {
                        generateCalendar();
                    }
                    
                    let currentDate = new Date(2024, 3, 1);
                    window.onload = generateCalendar;
                </script>
                
                <form id="reservationForm">
                    <div class="form-group">
                        <label for="nom">Nom complet</label>
                        <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Entrez votre email">
                    </div>
                    <div class="form-group">
                        <label for="date">Choisissez une date</label>
                        <input type="date" class="form-control" id="date">
                    </div>
                    <div class="form-group">
                        <label for="heure">Sélectionnez une heure</label>
                        <select class="form-control" id="heure">
                            <option>08:00 - 09:00</option>
                            <option>09:00 - 10:00</option>
                            <option>10:00 - 11:00</option>
                            <option>11:00 - 12:00</option>
                            <option>12:00 - 13:00</option>
                            <option>13:00 - 14:00</option>
                            <option>14:00 - 15:00</option>
                            <option>15:00 - 16:00</option>
                            <option>16:00 - 17:00</option>
                            <option>17:00 - 18:00</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" id="submit">Prendre rendez-vous</button>
                    <script>
                        document.getElementById('submit').addEventListener('click', function()) {
                            const nom = document.getElementById('nom').value;
                            const email = document.getElementById('email').value;
                            const date = document.getElementById('date').value;
                            const heure = document.getElementById('heure').value;
                            echo 'L\'e-mail a été envoyé avec succès.';

                            // Vérifier si tous les champs sont remplis
                            if (nom && email && date && heure) {
                                
                                require 'vendor/autoload.php'; // Inclure la bibliothèque Mailgun

                                use Mailgun\Mailgun;

                                // Vérifier si des données ont été soumises via POST

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
                        }
                    </script>
                </form>
            </div>
        </main>
        <footer>
            <section class="map">
                <div>
                    <iframe
                        width="600"
                        height="300"
                        style="border:0"
                        loading="lazy"
                        allowfullscreen
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1369.168816529873!2d0.3580196787339383!3d46.659594842888204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fdbcd82e97395b%3A0xce9018bb414eae77!2s11%20Bd%20Marie%20et%20Pierre%20Curie%2C%2086360%20Chasseneuil-du-Poitou!5e0!3m2!1sfr!2sfr!4v1706017881865!5m2!1sfr!2sfr">
                    </iframe>
                </div>
            </section>
            
            <section class="EndBar">
                <h1><img class="logo" src="../images/logo_UPTech.png"></h1>
                <ul>
                    <li>11 Bd Marie et Pierre Curie, 86360 Chasseneuil-du-Poitou</li>
                    <li>association.uptech@gmail.com</li>
                    <li onclick="togglePopup()" id="mentions">Mentions légales</li>
                </ul>
            </section>
            <div id="popup" class="popup">
                <div class="popup-content">
                    <p>
                    <h2>MENTIONS LÉGALES</h2>
                    <h3>Responsables</h3>
                    Hébergeur du site web : Université de Poitiers - i-médias, direction des systèmes d'information (DSI) <br>
                    Directeur de la publication : Président de l'université de Poitiers (actuellement : Virginie Laval) <br>
                    Responsable éditorial : Phillipe Traoré <br>
                    Webmaster : Noé Bourgeois <br>
                    <h3>Traitement des données à caractère personnelles</h3>
                    Les informations recueillies sur le formulaire disponible sur le site sont enregistrées sous la responsabilité de Noé Bourgeois par UPTech pour permettre la réservation d’une machine.
                    Les données collectées seront communiquées aux seuls membres du bureau de l’association UPTech. <br>
                    Les données sont conservées pendant une durée maximale de 1 an, mais pourraient être effacées sous un délai plus court. <br><br>
                    Toute collecte de données par le biais de ce formulaire est effectuée sur la base de votre consentement. Vous pouvez accéder aux données vous concernant, les rectifier, demander leur effacement ou exercer votre droit à la limitation du traitement de vos données. Vous pouvez également retirer à tout moment votre consentement au traitement de ces données.
                    Consultez le site cnil.fr pour plus d’informations sur vos droits. <br><br>
                    Pour exercer ces droits ou pour toute question sur le traitement de vos données dans ce dispositif, vous pouvez contacter Noé Bourgeois aux coordonnées suivantes : <br><br>
                    association.uptech@gmail.com <br><br>
                    Si vous estimez, après nous avoir contactés, que vos droits « Informatique et Libertés » ne sont pas respectés, vous pouvez adresser une réclamation à la CNIL. <br>
                    </p>
                    <span class="close-button" onclick="togglePopup()">X</span>
                </div>
            </div>
            
            <!-- Fond obscurci -->
            <div id="overlay" class="overlay"></div>
            
            <script>
                var popup = document.getElementById("popup");
                var overlay = document.getElementById("overlay");
                popup.style.display = "none";
                overlay.style.display = "none";
            // Fonction pour afficher ou cacher la popup
            function togglePopup() {
                var popup = document.getElementById("popup");
                var overlay = document.getElementById("overlay");
                if (popup.style.display === "none") {
                    popup.style.display = "block";
                    overlay.style.display = "block";
                } else {
                    popup.style.display = "none";
                    overlay.style.display = "none";
                }
            }
            </script>
        </footer>
        <script src="../script/script.js"></script>
        <script src="../script/calendar.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>