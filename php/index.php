<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>UP Tech</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap">
        <link rel="stylesheet" href="../style/accueil.css">
        <link rel="stylesheet" href="../style/commun.css">
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
            <section id="presentation" class="anim">
                <h2 class="anim">Qui sommes-nous ?</h2>
                <ul class="text_long_img">
                    <li id="adrien" class="anim"></li>
                    <li id="pres" class="anim text"><p>

                        UPTech est une Junior-Entreprise, c'est à dire une association pédagogique de conseil de loi 1901 ayant pour objet social la montée en compétences des 
                        étudiants à travers la réalisation de prestations de service pour des professionnels.
                        Les Juniors-Entreprises sont implantées au sein d'établissements de l'enseignement supérieur, dans notre cas à l'université de Poitiers. 
                        Elles proposent des services de qualité aux entreprises et permettent 
                        aux étudiants de développer leurs savoirs en mettant en pratique leur formation afin de répondre aux besoins des clients.
                    </p>
                    <p>
                        Nous possédons également un pôle étudiant appelé 3D Forge Studio qui consiste de la même manière à permettre aux étudiants de l'université de Poitiers
                        de réaliser des projets à l'aide de nos machines et de notre savoir-faire.
                    </p></li>
                </ul>
            </section>

            <div class="separator anim off10"></div>

            <section id="exemples" class="anim">
                <h2 class="anim">Nos réalisations</h2>
                <ul class="anim">
                    <li class="exemplesRealisations">
                        <div class="ex1"></div>
                        <h3>Pièces d'échec</h3>
                        <p>Nous avons réalisé ces modèle de pièces d'échecs</p>
                    </li>
                    <li class="exemplesRealisations">
                        <div class="ex2"></div>
                        <h3>Dragon</h3>
                        <p>Nous avons réalisé ce modèle de dragon articulé</p>
                    </li>
                </ul>
                <a id="LienRealisations" href="realisations.html" class="anim">Voir plus de réalisations</a>
            </section>

            <div class="separator anim off10"></div>

            <section id="acces">
                <h2 class="anim">Accessibilité</h2>
                <ul class="text_text anim">
                    <li class="li_acces">
                        <h3>Localisation</h3>
                        <p>
                            11 Bd Marie et Pierre Curie, <br>
                            86360, Chasseneuil-du-Poitou <br>
                            <br>
                            Bâtiment H1, étage 0 (sous l'accueil) <br>
                        </p>
                        <!--<img src="" alt="">-->
                    </li>
                    <li class="li_acces">
                        <h3>Horaires d'ouverture</h3>
                        <ul>
                            <li class="horaires">Lundi : 8h-12h / 14h-18h</li>
                            <li class="horaires">Mardi : 8h-12h / 14h-18h</li>
                            <li class="horaires">Mercredi : 8h-12h / 14h-18h</li>
                            <li class="horaires">Jeudi : 8h-12h / 14h-18h</li>
                            <li class="horaires">Vendredi : 8h-12h / 14h-18h</li>
                        </ul>
                    </li>
                </ul>
            </section>
        </main>
        <script src="../script/script.js"></script>
    </body>

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
</html>