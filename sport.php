<html lang="fr">
    <!-- balise head pour toutes les informations pour le navigateur tel que le lien pour le fichier css et le titre de la page à afficher dans l'onglet et la fenêtre du navigateur -->
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="style.css"/>
        <title>Sport - Jeux Olympique - Paris 2024</title>
    </head>

    <!-- balise body pour y mettre tout le code du site -->
    <body>

            <!-- balise div avec la classe site qui nous permettra d'englober la barre de navigation, le corps et le bas de la page dans trois bloc distincts -->
            <div class="site">

                <!-- php pour inclure notre barre de navigation dans chaque page -->
                <?php include('./navbar.php'); ?>

            <!-- balise div avec la classe corps dans laquelle on mettre tout ce qui n'appartient pas à la barre de navigation -->
            <div class="corps">

                <!-- balise div avec la classe section qui nous permettra d'y mettre tout notre texte dans le corps de la page par le biais des balises p dans la balise section-->
                <div class="section">
                    <div class="sous-section">
                        <hr/>
                        <p>
                            <h2><span class="mot_bleu">Bienvenue</span> sur la page du sport : Le Bowling</h2><br/>
                            Ici vous pourrez trouvez des informations sur le bowling<br/>
                            Ainsi que la liste des règles :
                            <br><br>
                            La piste (ou allée) mesure 1,05 mètre de large pour 18,29 mètres (60 pieds) de longueur et parfaitement plane. Sa largeur est constituée de 39 lattes de bois qui constituent un repère pour les joueurs.
                            <br>
                            La latte centrale, numéro 20, est clairement identifiée. Les flèches sont situées à 15 pieds de la ligne de faute (environ 4,7 mètres). Depuis les années 1990, les revêtements synthétiques en mélaminé8 ont peu à peu remplacé les pistes en érable à la faveur d'une diminution de l'entretien et d'une meilleure stabilité des conditions de jeu.
                            <br>
                            La piste est bordée de deux rigoles, appelés aussi dalots ou gouttières. La piste bénéficie d'un huilage spécifique, c'est-à-dire que la piste est huilée sur les 39 voire 45 premiers pieds (environ 11,9 m à 13,7 m) de la piste d'une façon dégressive, et le quart restant est parfois laissé sec.
                            <br>
                            Cette différence de rugosité est à l'origine de l'effet courbe de la boule vers la fin de la piste et est appelée « point de rupture » (« break point » en anglais). 
                            <br>
                            En effet, celle-ci va tourner sur elle-même sur la surface huilée, puis « accrocher » sur le sec pour se mettre à rouler, entraînant un changement de trajectoire.
                            Si la boule quitte la piste, elle est recueillie par les rigoles et ré-acheminée au remonte-boule par un système de rail ; aucun point n'est alors récolté.
                            <br>
                            La zone d'approche, séparée de la piste par la « ligne de faute », mesure 4,87 mètres (15 pieds). Les pistes sont surélevées9 par rapport au sol sur lequel elles sont posées de 38 cm à 43 cm afin de permettre à la boule de revenir en dessous de ces dernières.
                            Les quilles mesurent 38,1 cm de hauteur pour une masse minimum de 1,4 kg. <br>
                            Les boules ont des masses pouvant aller de 2,7 à 7,258 kg (6 à 16 livres). Le bowling étant d'origine américaine, les boules portent des numéros correspondant à leur masse en livres.
                            Il est possible d'avoir sa propre boule, d'un poids déterminé, percée à la taille de ses doigts et avec la couleur de son choix, ce qui permet un meilleur jeu.
                            <br><br>
                            Il existe différents types de boules :
                            les boules ligneuses (sans noyaux qui roulent en ligne droite sur la piste) ;
                            les boules suiveuses (qui permettent à la boule d'avoir une trajectoire en courbe).
                        </p>
                        <hr/>
                    </div>
                </div>

            </div>
        </div>

    </body>
</html>