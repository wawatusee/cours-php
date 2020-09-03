<?php
//Ceci est un controleur frontal
//Chargement des dépendances
require_once "config.php";
//On va s e connecter à la DB et mettre notre connection dans la variable $connect, le @ devant mysqli_connect retire l'affichage de l'erreur par défaut
$connect=mysqli_connect(DB_HOST,DB_LOGIN,DB_PWD,DB_NAME,DB_PORT);
//Si la connction a échoué(elle vaut false)
if (!$connect){
    //affichage de l'erreur de connection
    die('Erreur de connection('.mysqli_connect_error().')|Message du système:'.mysqli_connect_error());
}
//$sql contient du sql
$sql="SELECT * FROM livredor;";
//execution de la requète avec mysqli_query en cas d'erreur, arrète le scripte avec "or die()" et affichage de l'erreur avec musqli_error ou mysqli_errno
$recupData=mysqli_connect($connect,$sql)or die("Erreurs : ".mysqli_error($connect));
?>