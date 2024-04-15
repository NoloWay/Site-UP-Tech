<!doctype html>
<html lang="fr">
    <head>
        <title>Réalisations</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Comptible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap">
        <link rel="stylesheet" href="../style/commun.css">
        <link rel="stylesheet" href="../style/realisations.css">
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
            <h2 class="anim">Nos Réalisations</h2>
            <ul class="anim">
                <li class="exemplesRealisations">
                    <div class="ex1"></div>
                    <h3>exemple</h3>
                    <p>Nous avons réalisé ce modèle</p>
                </li>
                <li class="exemplesRealisations">
                    <div class="ex2"></div>
                    <h3>exemple</h3>
                    <p>Nous avons réalisé ce modèle</p>
                </li>
                <li class="exemplesRealisations">
                    <div class="ex1"></div>
                    <h3>exemple</h3>
                    <p>Nous avons réalisé ce modèle</p>
                </li>
                <li class="exemplesRealisations">
                    <div class="ex2"></div>
                    <h3>exemple</h3>
                    <p>Nous avons réalisé ce modèle</p>
                </li>
                <li class="exemplesRealisations">
                    <div class="ex1"></div>
                    <h3>exemple</h3>
                    <p>Nous avons réalisé ce modèle</p>
                </li>
                <li class="exemplesRealisations">
                    <div class="ex2"></div>
                    <h3>exemple</h3>
                    <p>Nous avons réalisé ce modèle</p>
                </li>
            </ul>
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
    </body>
</html>