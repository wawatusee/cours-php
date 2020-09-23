
<h1>Les tableaux</h1>
<h2>Associatifs</h2>
<p>Un tableau associatif est composé de paire <i>nom-valeur</i>, ces paires sont séparées par des virgules, l'ensemble encadré par des crochets</p>
<pre class="code">
    $arrayAssociatif=["nom"=>"Chihab","profession"=>"webdev"];
    var_dump($arrayAssociatif);
</pre>
<p>Affiche : </p>
<?php
$arrayAssociatif=["nom"=>"Chihab","profession"=>"webdev"];
var_dump($arrayAssociatif);
?>
<h2>Indexés</h2>
<p>Un tableau indexé est composé d'une suite de valeurs, séparées par des virgules et encadrées par des crochets</p>
<p>Exemple :</p>
<pre class="code">
    $arrayIndexe=["Chihab","webdev"];
</pre>
<p>Affiche : </p>
<?
$arrayIndexe=["Chihab","webdev"];
var_dump($arrayIndexe);
?>
<h2>For each</h2>
<a href="https://www.php.net/manual/fr/control-structures.foreach.php">For each-Manual-php</a>
<h3>Exercice 1: </h3>
<p>$arrayIndexe = [1, 7, 12, 25, 94, 84, 65];
Condition + Boucle + Modulo
Les 3 choses importantes pour résoudre cet exercice
Affichez tous les nombres pairs dans l'array $arrayIndexe
</p>
<pre class="code">
$arrayIndexe = [1, 7, 12, 25, 94, 84, 65];
foreach($arrayIndexe as $monNombre){
 if($monNombre%2==0){
     echo $monNombre.' est pair, ';
    }
}
</pre>
<p>Affiche : </p>
<?php
$arrayIndexe = [1, 7, 12, 25, 94, 84, 65];
foreach($arrayIndexe as $monNombre){
 if($monNombre%2==0){
     echo $monNombre.' est pair, ';
    }
}
?>
<h3>Exercice 2</h3>
<p>$arrayPyramide = [1, 3, 7, 0, 9];Affichez chacune des valeurs tour à tour autant de fois que la valeur de l'index + 1
(Ex la valeur 7 à pour index 2 donc elle s'affiche 3 fois)
</p>
<p>Résultat attendu : </p>
1 <br>
33<br>
777<br>
0000<br>
99999<br>

<p>Indice <a href="https://www.php.net/manual/fr/function.str-repeat.php
">Fonction repeat-php-manual</a></p>
<pre class="code">
$arrayPyramide = [1, 3, 7, 0, 9];
foreach($arrayPyramide as $clef=>$monNombre){
     echo str_repeat($monNombre,$clef+1).'<br>';
}
</pre>
<?php 
$arrayPyramide = [1, 3, 7, 0, 9];
foreach($arrayPyramide as $clef=>$monNombre){
     echo str_repeat($monNombre,$clef+1).'<br>';
}
?>