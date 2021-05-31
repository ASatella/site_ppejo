<html lang="fr">
    <!-- balise head pour toutes les informations pour le navigateur tel que le lien pour le fichier css et le titre de la page à afficher dans l'onglet et la fenêtre du navigateur -->
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="style.css"/>
        <title>Accueil - Jeux Olympique - Paris 2024</title>
    </head>

    <!-- balise body pour y mettre tout le code du site -->
    <body>

        <!-- balise div avec la classe site qui nous permettra d'englober la barre de navigation, le corps et le bas de la page dans trois bloc distincts -->
        <div class="site">

            <!-- php pour inclure notre barre de navigation dans chaque page -->
            <?php include('./navbar.php'); ?>

            <!-- balise div avec la classe corps dans laquelle on mettre tout ce qui n'appartient pas à la barre de navigation -->
            <div class="corps">
                <header>
                    <img id="logo_header" src="img/symbol_paris_2024.svg" alt="logo_header"/>
                    <h1>Jeux Olympiques</h1>
                    <h2>Paris - 2024</h2>
                </header>

                <!-- balise div avec la classe section qui nous permettra d'y mettre tout notre texte dans le corps de la page par le biais des balises p dans la balise section-->
                <div class="section">
                    <div class="sous-section">
                        <hr/>
                            <p>
                            <h2><span class="mot_bleu">Bienvenue</span> sur le site des J-O de Paris 2024 !</h2>
                            Ici vous pourrez trouver toutes les informations relatives à un sport
                            pratiqué aux J.O. de Paris 2024, ainsi que la liste des champions. <br/>
                            </p>
                            <!-- balise figure nous permettra d'illustrer notre page par des schémas, graphiques, légendes, images -->
                            <figure>
                                <img src="img/logo_jo.svg" alt="Logo JO"/>
                                <figcaption>Logo des J.O.</figcaption>
                            </figure>
                            <p>
                                Ici vous pourrez trouvez des informations sur les J.O. 2024 de Paris<br/>
                            </p>
                            <p>
                               Qu'est-ce que les <span class="mot_bleu">Jeux Olympiques</span> ? 
                               <br><br>
                               Les Jeux olympiques (appelés aussi JO, les Jeux,
                               les Olympiades, les Jeux olympiques modernes ou en
                               en anglais : Olympic Games ou Olympics;
                               sont des événements sportifs internationaux majeurs,
                               regroupant les sports d’été et d’hiver,
                               auxquels des milliers d’athlètes participent à travers différentes compétitions. 
                            </p>
                        <hr/>
                    </div>
                </div>

            </div>
        </div>

    </body>
</html>