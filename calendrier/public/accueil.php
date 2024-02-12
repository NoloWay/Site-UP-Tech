<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>3D Forge Studio</title>
        <link rel="stylesheet" href="css/commun.css">
        <link rel="stylesheet" href="css/accueil.css">
    </head>
    <style>
        /**
        Style commun
        

        html, body {
            margin: 0;
            height: 100%;
            background-color: white;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        header {
            width: 100%;
            height: 100px;
            background-color: rgb(42, 42, 55);
            border-bottom: 1px solid rgb(221, 221, 221);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.075);
            display: flex;
            justify-content:  center;
            align-items: center;
        }

        h1 {
            font-size: 25px;
            margin: 0;
            color: rgb(255, 255, 255);
            width: 40%;
            text-align: center;
        }

        nav {
            width: 60%;
        }

        nav a {
            margin: 0 10px;
            padding: 10px 5px;
            text-decoration: none;
            color: rgb(220, 220, 220);
            font-size: 20px;
            transition: 0.2s;
        }

        nav a:hover {
            font-size: 23px;
        }

        main {
            height: calc(100% - 51px);
        }

        #LienRealisations:hover {
            background-color: rgb(220, 220, 220);
            color: rgb(40, 40, 40);
            font-size: 23px;
        }

        .exemplesRealisations {
            width: 300px;
            height: 400px;
            border: 1px solid rgb(220, 220, 220);
            margin: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            border-radius: 5px;
        }

        .exemplesRealisations div {
            height: 200px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .er1 {
            background-image: url("images/exemple1.jpg");

        }

        .er2 {
            background-image: url("images/exemple2.jpg");

        }

        .exemplesRealisations h3 {
            margin: 0;
            margin-top: 20px;
            margin-left: 15px;
            font-size: 24px;
            color: rgb(40, 40, 40);
        }

        .exemplesRealisations p {
            margin: 0;
            margin-top: 5px;
            margin-left: 15px;
            font-size: 14px;
            color: rgb(40, 40, 40);
        }

        #EndBar {
            height: 10%;
            background-color: rgb(42, 42, 55);
            display: flex;
            justify-content:center;
            align-items: center;
        }

        #EndBar h2 {
            color: white;
            margin: 0 20px;
        }

        #LienEndBar {
            color: white;
            text-decoration: none;
            transition: 0.2s;
            font-size: 20px;
        }

        #LienEndBar:hover {
            color: rgb(255, 255, 255);
            font-size: 22px;
        }

        /**
        Fin style commun

        Début style accueil
        

        #exemples {
            background-color: white;
            padding: 80px 0px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #exemples h2 {
            margin: 0;
            margin-bottom: 40px;
            font-size: 30px;
            color: rgb(40, 40, 40);
        }

        #exemples ul {
            display: flex;
            list-style: none;
            margin-bottom: 40px;
        }

        #LienRealisations {
            color: white;
            background:local rgb(60, 60, 80);
            padding: 5px;
            border-radius: 5px;
            text-decoration: none;
            margin-right: 0px;
            transition: 0.2s;
            font-size: 20px;
        }*/
    </style>

    <header>
        <h1>3D FORGE STUDIO</h1>
        <nav>
            <a href="accueil.php">Accueil</a>
            <a href="realisations.php">Réalisations</a>
            <a href="contact.php">Contact</a>
            <a href="reservations.php">Réservations</a>
        </nav>
    </header>

    <body>
        <main>
            <section id="exemples">
                <h2>Nos réalisations</h2>
                <ul>
                    <li class="exemplesRealisations">
                        <div class="er1"></div>
                        <h3>Turbine</h3>
                        <p>Nous avons réalisé ce modèle de turbine</p>
                    </li>
                    <li class="exemplesRealisations">
                        <div class="er2"></div>
                        <h3>Main</h3>
                        <p>Nous avons réalisé ce modèle de main</p>
                    </li>
                </ul>
                <a id="LienRealisations" href="realisations.html">Voir plus de réalisations</a>
            </section>
        </main>
    </body>

    <footer>
        <section class="EndBar">
            <h2>ENDBAR</h2>
            <a id="LienEndBar" href="contact.html">contact</a>
        </section>
    </footer>
</html>