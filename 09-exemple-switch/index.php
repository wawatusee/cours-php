<?php
/*Si la variable d'URL "p" n'existe pas '*/
if(!isset($_GET["p"])){
    //On importe le fichier accueil.php qui se trouve dans le dossier file, include permet d'importer
    include "files/accueil.php";
    exit();
}else{
    $p=$_GET["p"];
    //p existe
    switch($p){
        case "tuto":
            include "files/tutoriel.php";
            break;
        case "contact":
            include "files/contact.php";
            break;
        case "cours";
            include "../index.php";
            break;
        default:
            include "files/accueil.php";
    }
}
?>