<?php
    session_start(); //fonction pour permettre à $_SESSION de mémoriser les informations durant la session
?>
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

            <?php include('./navbar.php'); ?>

            <!-- balise div avec la classe corps dans laquelle on mettre tout ce qui n'appartient pas à la barre de navigation -->
            <div class="corps">

                <!-- balise div avec la classe section qui nous permettra d'y mettre tout nos formulaire avec la balise form-->
                <div class="section">
                    <div class="sous-section">
                        <hr/>
                        <?php 
                        if (isset($_POST['confirmation'])) {
                                        //Connexion au SGBD MySQL
                                        $connexion = mysqli_connect("localhost","root","","jo2024");
                                        if (!$connexion)
                                        {
                                            echo "Connexion à la BDD échouée";
                                        } else {
                                            $titre = $_POST['titre'];
                                            $date = $_POST['date'];
                                            if (mysqli_query($connexion,"INSERT INTO evenement SET titre='$titre', date='$date'"))
                                                {
                                                    //Insertion dans la table utilisateur

                                                    echo "Création de l'enregistrement terminé";
                                                    mysqli_close($connexion);
                                                } else {
                                                    echo "Une erreur est survenue veuillez réessayer plus tard !";
                                                }
                                            }
                                        }
                        ?>
                                <div class="formulaire">

                                    <form action="./enregistrement_evenement.php" method="post">
                                        <p>
                                            <label for="titre">Titre<br/>
                                                <input type="text" name="titre"/><br/>
                                            </label>
                                            <label for="date">Date<br/>
                                                <input type="date" name="date"/><br/>
                                            </label>
                                                <input type="submit" name="confirmation" value="Créer"/>
                                            </p>
                                    </form>
                                    <p>Les évènements actuels :</p>
                                    <?php
                                    $connexion = mysqli_connect("localhost","root","","jo2024");
                                    $RechercheEvenement = mysqli_query($connexion, "SELECT * from evenement");
                                    echo 
                                    "<table>
                                    <tr>
                                    <th>id</th>
                                    <th>Titre</th>
                                    <th>Date</th>
                                    </tr>";
                                    while($TableauEvenement = mysqli_fetch_array($RechercheEvenement))
                                        {
                                      echo "<tr>
                                    <th>", $TableauEvenement['idevenement'], "</th>
                                    <th>", $TableauEvenement['titre'], "</th>
                                    <th>", $TableauEvenement['date'], "</th>
                                    </tr>";
                                    }echo "</table>
                                    </div>"
                                    ?>
                                </div>
                        <hr/>
                    </div>
                </div>

            </div>

        </div>

    </body>
</html>