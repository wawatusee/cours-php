<!doctype html>
<html lang="en">
<head>
    <link href="css/style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Les boucles</h1>
<H2>La boucle While</H2>
<p>La boucle while est le moyen le plus simple d'implémenter une bouclze en PHP</p>
<p>Attention, cette boucle est aussi celle ou l'on fait le plus de fautes(type boucle infini)</p>
Exemples de boucles while :

<pre class="code">
            $lulu=10;
        while ($lulu>=0){
            echo "$lulu | ";
            //on retire 1 de lulu
            $lulu-=1;
        }
         echo '$lulu vaut maintenant '." $lulu";
</pre>
    <?php
        $lulu=10;
        while ($lulu>=0){
            echo "$lulu | ";
            $lulu= $lulu-1;
        }
        //Concaténation
        echo '$lulu vaut maintenant '." $lulu";
        echo "<hr>";
        ?>

        //Le égal sur une variable qui existe déjà efface le contenu est et met une nouvelle valeur
<pre class="code">
            $lulu=10;
        while ($lulu>=0){
            echo "$lulu | ";
            //on retire 1 de lulu
            $lulu-=1;
        }
         echo '$lulu vaut maintenant '." $lulu";
</pre>
    <?php
        $lulu=10;
        while ($lulu>=0){
            echo "$lulu | ";
            //on retire 1 de lulu
            $lulu-=1;
        }
         echo '$lulu vaut maintenant '." $lulu";
        ?>

<pre class="code">
    $lulu=10;
        while ($lulu>=0){
            echo "$lulu | ";
            //on retire 3 de lulu
            $lulu-=3;
        }
    echo '$lulu vaut maintenant '." $lulu";
</pre>
    <?php
        $lulu=10;
        while ($lulu>=0){
            echo "$lulu | ";
            //on retire 3 de lulu
            $lulu-=3;
        }
    echo '$lulu vaut maintenant '." $lulu";
    ?>
<pre class="code">
    $lulu=0;
    while ($lulu<=20){
        echo "$lulu | ";
        //on ajoute 3 à lulu
        $lulu+=3;
    }
    echo '$lulu vaut maintenant '." $lulu";
</pre>
<?php
$lulu=0;
while ($lulu<=20){
    echo "$lulu | ";
    //on ajoute 3 à lulu
    $lulu+=3;
}
echo '$lulu vaut maintenant '." $lulu";
?>
<h3>Exercice 1: </h3>
//
<pre class="code">
        echo '<p>$lulu vaut un chiffre au hasard entre -100 et 100, en ajoutant 1 à chaque fois, affichez $lulu vaut : </p>';
    $lulu=mt_rand(-100,100);
    while ($lulu<=50){
        echo "$lulu | ";
        $lulu+=1;
</pre>
<?php
echo '<p>$lulu vaut un chiffre au hasard entre -100 et 100</p>';
$lulu=mt_rand(-100,100);
while ($lulu<=50){
    echo "$lulu | ";
    $lulu+=1;
}
?>
<h3>Exercice 2: </h3>
//
<pre class="code">
    echo '<p>$lulu vaut un chiffre au hasard entre 0 et 100</p>';
    $lulu=mt_rand(-100,100);
    while ($lulu<80){
        echo "$lulu | ";
        $lulu+=3;
    }
    echo '$lulu vaut :',"$lulu";
</pre>
<?php
echo '<p>$lulu vaut un chiffre au hasard entre 0 et 100</p>';
$lulu=mt_rand(0,100);
while ($lulu<80){
    echo "$lulu | ";
    $lulu+=3;
}
echo '$lulu vaut :',"$lulu";
?>
<h3>Exercice 3: </h3>
//
<pre class="code">
echo '<p>$lulu vaut un chiffre au hasard entre 0 et 300</p>';
$lulu=mt_rand(0,300);
while ($lulu>0){
    echo "$lulu | ";
    $lulu-=1;
}
echo '$lulu vaut :',"$lulu";
</pre>
<?php
echo '<p>$lulu vaut un chiffre au hasard entre 0 et 300</p>';
$lulu=mt_rand(0,300);
while ($lulu>0){
    echo "$lulu | ";
    $lulu-=1;
}
echo '$lulu vaut :',"$lulu";
?>
<h3>Exercice 4: </h3>
//
<pre class="code">
echo '<p>$lulu vaut un chiffre au hasard entre 0 et 20</p>';
$lulu=mt_rand(0,20);
do{
    echo "$lulu | ";
    $lulu+=1;
} while ($lulu<10);
echo '$lulu vaut :',"$lulu";
</pre>
<?php
echo '<p>$lulu vaut un chiffre au hasard entre 0 et 20</p>';
$lulu=mt_rand(0,20);
do{
    echo "$lulu | ";
    $lulu+=1;
} while ($lulu<10);
echo '$lulu vaut :',"$lulu";
?>
</body>
</html>
