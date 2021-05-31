<html lang="fr">
    <!-- balise head pour toutes les informations pour le navigateur tel que le lien pour le fichier css et le titre de la page à afficher dans l'onglet et la fenêtre du navigateur -->
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="style.css"/>
        <title>Champions - Jeux Olympique - Paris 2024</title>
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
                                <h2><span class="mot_bleu">Bienvenue</span> sur la page des champions</h2>
                                Ici vous pourrez trouvez des informations sur les champions du bowling<br/>
                                <br/>
                                Ainsi que la liste des champions.
                                <br/>
                            </p>
                            <br/>
                            <!-- Tableau permettant de contenir les informations de nos champions -->
                            <table>
                                <tbody>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <th scope="col">Image</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Prénom</th>
                                        <th scope="col">Participation</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Champion 1</th>
                                        <td><img src='./img/champion1.jpg' id='champion1' alt="chamion_1"></td>
                                        <td>Weber</td>
                                        <td>Jack</td>
                                        <td>2014</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Champion 2</th>
                                        <td><img src='./img/champion2.jfif' id='champion2' alt="champion_2"></td>
                                        <td>Polnareff</td>
                                        <td>Jean-Pierre</td>
                                        <td>2019</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Champion 3</th>
                                        <td><img src='./img/champion3.jpg' id='champion3' alt="champion_3"></td>
                                        <td>Smallwood</td>
                                        <td>Maxim</td>
                                        <td>2010</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr/>
                        </div>
                    </div>

                </div>
        </div>

    </body>
</html>