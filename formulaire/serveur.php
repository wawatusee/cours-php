<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Serveur</title>
    </head>
    <body>
    <?php
    if (isset($_GET['nom']) && isset($_GET['mdp'])) {
        echo "<h1>Bienvenue ".$_GET['nom'].", sur le site !</h1>";
        }
    ?>
    </body>
</html>
