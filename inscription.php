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
                                <hr/><?php
                                    if (isset($_POST['confirmation'])) {
                                        //Connexion au SGBD MySQL
                                        $connexion = mysqli_connect("localhost","root","","jo2024");
                                        if (!$connexion)
                                        {
                                            echo "Connexion à la BDD échouée";
                                        } else {
                                            $courriel = $_POST['courriel'];
                                            $nom = $_POST['nom'];
                                            $prenom = $_POST['prenom'];
                                            $pays = $_POST['pays'];
                                            $mdp = $_POST['mdp'];
                                            if (mysqli_num_rows(mysqli_query($connexion, "SELECT * FROM utilisateur WHERE mdp='$mdp'")) == 1)
                                            {
                                                echo "Le mot de passe est déjà utilisé, veuillez en choisir un autre !";
                                            } else {
                                                if (mysqli_query($connexion,"INSERT INTO utilisateur SET courriel='$courriel', nom='$nom', prenom='$prenom', pays='$pays', mdp='$mdp'"))//Insertion dans la table utilisateur
                                                {
                                                    $InscriptionFini = true;
                                                    echo "Inscription terminée ! Bienvenue <strong>$nom</strong> vous pouvez maintenant vous connecter <a href='./evenement.php'>ici</a>";
                                                } else {
                                                    echo "Une erreur est survenue veuillez réessayer plus tard !";
                                                }
                                            }
                                        }
                                    }
                                    if (!isset($InscriptionFini))
                                    {
                                ?>
                                <div class="formulaire">
                                    <form action="./inscription.php" method="post">
                                        <p>
                                            Inscription à l'espace membre :<br/><br/>
                                            <label for="courriel">Courriel<br/>
                                                <input type="text" name="courriel" required/><br/>
                                            </label>
                                            <label for="nom">Nom<br/>
                                                <input type="text" name="nom" required/><br/>
                                            </label>
                                            <label for="prenom">Prénom<br/>
                                                <input type="text" name="prenom" required/><br/>
                                            </label>
                                            <label for="pays">Pays<br/>
                                                <select name="pays" required>
                                                    <option value="France">France</option>
                                                    <option value="Allemagne">Allemagne</option>
                                                    <option value="Espagne">Espagne</option>
                                                    <option value="Italie">Italie</option>
                                                    <option value="Royaume-Uni">Royaume-Uni</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Chine">Japon</option>
                                                </select>
                                            </label><br/>
                                            <label for="mdp">Mot de passe<br/>
                                                <input type="password" name="mdp" required/><br/>
                                            </label>
                                            <input type="submit" name="confirmation" value="Valider"/>
                                        </p>

                                    </form>
                                    <p><a href="./evenement.php">Se connecter</a></p>
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