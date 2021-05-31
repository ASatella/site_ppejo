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
                            if(isset($_POST['confirmer']))
                            {
                                if ($_POST['courriel'] == null)
                                {
                                    echo "Veuillez remplir le champ Courriel";
                                } else {
                                    if ($_POST['mdp'] == null)
                                    {
                                        echo "Veillez remplir le champ Mot de passe";
                                    } else {
                                        $courriel = $_POST['courriel'];
                                        $mdp = $_POST['mdp'];
                                        //Connexion au SGBD MySQL
                                        $connexion = mysqli_connect("localhost","root","","jo2024");
                                        if (!$connexion)
                                        {
                                            echo "Connexion à la BDD échouée";
                                        } else {
                                            $RechercheCompte = mysqli_query($connexion, "SELECT * FROM utilisateur WHERE mdp='$mdp'"); //Si il y a un compte trouvé la fonction mysqli_num_rows renvoie 1 sinon 0
                                            if (mysqli_num_rows($RechercheCompte) == 0)
                                            {
                                                echo "Compte introuvable, veuillez vérifier votre saisie.";
                                            } else {
                                                $ConnexionFini = true;
                                                echo "Connexion effectuée ! Vous pouvez maintenant acceder à la page des évenements <a href='./enregistrement_evenement.php'>ici</a>!";
                                            }
                                            }
                                        }
                                    }
                                }
                            if (!isset($ConnexionFini)) {
                                ?>
                                <div class="formulaire">

                                    <form action="./evenement.php" method="post">
                                        <p>
                                            <label for="courriel">Courriel<br/>
                                                <input type="text" name="courriel"/><br/>
                                            </label>
                                            <label for="mdp">Mot de passe<br/>
                                                <input type="password" name="mdp"/><br/>
                                            </label>
                                            <input type="submit" name="confirmer" value="Valider"/>
                                        </p>
                                    </form>
                                    <p>Pour pouvoir planifier des évènements vous devez vous inscrire<br/><br/>>
                                        <a href="./inscription.php">Créer un compte</a>
                                    </p>
                                </div>
                                <?php
                            }
                        ?>
                        <hr/>
                    </div>
                </div>

            </div>

        </div>

    </body>
</html>