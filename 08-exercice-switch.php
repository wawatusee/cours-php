<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$tab=[
    1 => [
        'titre'=>"Huit cas de coronavirus en Belgique : la situation suivie «pas à pas», «sans exagération mais sans minimiser non plus» (direct)",
        'texte'=>"Six nouveaux cas de coronavirus ont été détectés en Belgique, a annoncé lundi la ministre fédérale de la Santé Maggie De Block (Open Vld) à l’issue d’un comité de concertation consacré à l’épidémie. Avec la personne testée positive dimanche et celle revenue de Wuhan, en Chine, il y a quelques semaines et guérie depuis, cela porte à huit le nombre total de cas avérés depuis le début de l’épidémie mondiale.",],
    2 =>[
        'titre'=>"Météo: alerte aux conditions glissantes ce mardi matin, verglas et pluie",
        'texte'=>"L’après-midi de lundi sera nuageuse, marquée par des pluies intermittentes ou quelques averses, éventuellement accompagnées de grésil et d’un coup de tonnerre. Si le temps deviendra plus sec en cours de nuit, l’Institut royal météorologique publie pour la nuit une alerte jaune aux conditions glissantes dans tout le pays sauf à la Côte. L’alerte commence ce lundi soir à minuit et se termine ce mardi à 11h.",],
    3 =>[
        'titre'=>"Judo: Matthias Casse forfait à Rabat",
        'texte'=>"Matthias Casse, qui devait disputer ce week-end le Grand Prix de Rabat un mois après sa victoire au prestigieux Tournoi de Paris, fera finalement l’impasse sur l’épreuve marocaine. L’Anversois, qui souffre légèrement du genou, sera maintenu au repos pour ne pas prendre le moindre risque. Nº2 mondial et nº1 au ranking olympique (qui sert pour la qualification pour les JO de Tokyo) dans la catégorie des moins de 81 kg, il est déjà assuré de sa place aux Jeux et, en accord avec son staff, a décidé de reporter sa rentrée.

« Nous n’avons pas décidé si Matthias disputera encore une compétition avant l’Euro de Prague (1-3 mai) », indique Koen Sleeckx, le directeur technique de la Fédération flamande.

Toma Nikiforov, lui, sera bien présent à Rabat. Pour le Schaerbeekois, champion d’Europe 2018 en moins de 100 kg, ce sera le grand retour aux affaires après plus de 8 mois d’absence dus à deux opérations successives pour renforcer ses épaules. Ce sera aussi, pour lui, le début d’un sacré contre-la-montre pour décrocher les points nécessaires pour se qualifier pour Tokyo.",],
    4=>[
        'titre'=>"Boxe: Anthony Joshua affrontera Kubrat Pulev le 20 juin au Tottenham Stadium",
        'texte'=>"Le boxeur britannique Anthony Joshua a confirmé lundi qu’il défendrait ses titres WBA-IBF-WBO des poids lourds face au Bulgare Kubrat Pulev le 20 juin à Londres, éloignant la perspective d’un combat de réunification.

« 20 juin », a posté sur son compte Twitter le Britannique de 30 ans, avec une photo de lui décoré de ses trois ceintures mondiales reconquises lors de sa victoire aux points sur Andy Ruiz en décembre en Arabie saoudite.",
    ]
];
?>
<p> Pages :
    <a href="?id=1">1</a> | <a href="?id=2">2</a> | <a href="?id=3">3</a> |
    <a href="?id=4">4</a>
</p>
<?php
if(isset($_GET['id'])){
    //passage en variable locale
    $id=$_GET['id'];
    //
    echo 'getType de get ID nous donne le TYPE '.gettype($id).' de la variable '.$id;
}else{
    $id=0;
}
switch ($id) {
    case  1:
        echo '<h2>'.$tab[$id]["titre"].'</h2>';
        echo '<p>'.$tab[1]["texte"].'</p>';
        break;
    case  2:
        echo '<h2>'.$tab[2]["titre"].'</h2>';
        echo '<p>'.$tab[2]["texte"].'</p>';
        break;
    case  3:
        echo '<h2>'.$tab[3]["titre"].'</h2>';
        echo '<p>'.$tab[3]["texte"].'</p>';
        break;
    case  4:
        echo '<h2>'.$tab[4]["titre"].'</h2>';
        echo '<p>'.$tab[4]["texte"].'</p>';
        break;
}
?>

</body>
</html>