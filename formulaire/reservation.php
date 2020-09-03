<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Reservation</title>
    </head>
    <body>
    <?php
    if (isset($_POST['nom']) && isset($_POST['prenom'])) {
        echo "<h1>Bienvenue ".$_POST['nom'].", sur le site !</h1><p>Votre réservation : ";
        echo "<p>Vous avez choisi de partir en :".$_POST ['pays']." </p>";
        echo "<p>Vous vous déplacerez en :".$_POST ['transport'][0]." </p>";
        }
    ?>
    </body>
</html>
