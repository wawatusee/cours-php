<!doctype html>
<html lang="fr">
<head>
    <link href="/cours/css/style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
</head>
<body>
    <header>
    <h1>Révisions</h1>
    </header>
    <nav>
    <?php
        $nb_fichier = 0;
        echo '<ul>Cours base PHP';
        if ($dossier = @opendir('cours')) {
            while (false !== ($fichier = readdir($dossier))) {
                if ($fichier != '.' && $fichier != '..' && $fichier != 'index.php') {

                    $nb_fichier++; // On incrémente le compteur de 1
                    echo '<li><a href="./cours/' . $fichier . '">' . $fichier . '</a></li>';
                } // On ferme le if (qui permet de ne pas afficher index.php, etc.)

            } // On termine la boucle
            echo '</ul><br />';
            echo 'Il y a <strong>' . $nb_fichier . '</strong> fichier(s) dans le dossier';

            closedir($dossier);

        } else
            echo 'Le dossier n\' a pas pu être ouvert';
    ?>
    </nav>
    <main>

    </main>
    <footer>
    </footer>
</body>
</html>



