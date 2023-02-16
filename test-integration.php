<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test d'intégration PHP/MySQL</title>
</head>
<body>
    <h2>Liste des utilisateurs et de leurs contacts</h2>
    <!-- Intégration avec la librairie MySQLi de PHP -->
    <?php
        // Étape 1 : Se connecter au serveur MySQL
        $cnx = mysqli_connect('localhost', 'root', '', 'nestor');

        // Étape 2 : TOUJOURS spécifier l'encodage de communication entre 
        // le serveur MySQL et la librairie de code utilisée.
        mysqli_set_charset($cnx, 'utf8');
        
        // Étape 3 : Écrire une "requête SQL" (ou "commande SQL")
        $requeteUtils = "SELECT * FROM utilisateur";

        // Étape 4 : Soumettre la requête à la connexion obtenu en 1
        $resultatUtils = mysqli_query($cnx, $requeteUtils);

        // Étape 5 : Travailler avec le résultat
        echo '<ul>';
            while ($enreg = mysqli_fetch_row($resultatUtils)) {
                echo '<li>' . $enreg[1] . ' (' . $enreg[2] . ')</li>';
            }
        echo '</ul>';
    ?>

</body>
</html>