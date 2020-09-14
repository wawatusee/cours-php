<?php
    function createMenu($repertoire){
        $nb_fichier = 0;
        echo '<ul>';
        if ($dossier = @opendir($repertoire)) {
            while (false !== ($fichier = readdir($dossier))) {
                if ($fichier != '.' && $fichier != '..' && $fichier != 'index.php') {
                //Condition qui permet de ne pas afficher index.php, etc
                    $nb_fichier++; // On incrémente le compteur de 1
                   //echo '<li><a href="./cours/' . $fichier . '">' . $fichier . '</a></li>';
                   echo '<li><a href="index.php?lien=' . $fichier . '">' . $fichier . '</a></li>';
                   //echo '<li><a href="index.php?lien='.$fichier.'</a>'.$fichier.'</li>';
                    //Création du lien à partir du nom du fichier
                } 
                
            } // On termine la boucle
            echo '</ul><br />';
            echo 'Il y a <strong>' . $nb_fichier . '</strong> fichier(s) dans le dossier';
            closedir($dossier);
        } else
            echo 'Le dossier n\' a pas pu être ouvert';
    }
    echo 'Cours base PHP';
     createMenu("cours");
    echo 'Exercices PHP';
    createMenu("Exercices");
    ?>