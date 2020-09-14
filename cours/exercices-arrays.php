<h2>Les arrays</h2>
<p>Un tableau</p>
<?php
$arrIndexe=["Hello","By", "Salut"];
echo "Le tableau arrindex contient";

echo "éléments";
?>
<h3>La boucle</h3>
    <p>Créer une boucle for qui affiche les numéros de 0 à -10.</p>
<?php
for($i=0;$i>-11;$i--){
    echo $i.'<br>';
}
?>
    <p>Voici un tableau $nombres=[1,2,3,4,5,6,7,8,9], bouclez sur ce tableau, à chacun de ses  éléments affichez cet élément exposant 2, puis sautez une ligne</p>
    <pre class="code">
        $nombres=[1,2,3,4,5,6,7,8,9];
        $longueurTableau= count($nombres);
        for($i=0;$i<$longueurTableau;$i++){
            $element=$nombres[$i];
            echo 'Pour le chiffre : '.$element.'. Le carré de ce chiffre est : '.$element*$element.'<br>';
        }
    </pre>
<h3>Résultat :</h3>
<?
    $nombres=[1,2,3,4,5,6,7,8,9];
    $longueurTableau= count($nombres);
    for($i=0;$i<$longueurTableau;$i++){
        $element=$nombres[$i];
        echo 'Pour le chiffre : '.$element.'. Le carré de ce chiffre est : '.$element*$element.'<br>';
    }
?>
<h3>Même exercice avec for each</h3>
<pre class="code">
      foreach ($nombres as $element){
        echo 'Pour le chiffre : '.$element.'. Le carré de ce chiffre est : '.$element*$element.'<br>';
    }
</pre>
<?php
    foreach ($nombres as $element){
        echo 'Pour le chiffre : '.$element.'. Le carré de ce chiffre est : '.$element*$element.'<br>';
    }?>
<h3>Boucle for each</h3>
<p>Avec un forEach concaténez l'ensemble des éléments de l'array $mots et affichez cet ensemble à l'écran
    $mots = ["Hello", "Bye", "Comment ça va ?", "Prends soin de toi"];
</p>
<h3>1er exo forEach , </h3>
<?php
$salutations=["Salut","Ca va", "Bye","Comment ça va?", "prends soin de toi"];
    foreach ($salutations as $mot){
        echo $mot." ";}
?>
<h3>2eme exo index , </h3>
<p>
    Ex 2: Affichez deux phrases qui l'une utilise les index 0 et 2 et l'autre utilise les index 1 et 3 pour créer deux phrases que vous afficherez à l'écran
    (Concaténez les éléments de chaque phrase ensemble)
    $mots = ["Hello", "Bye", "Comment ça va ?", "Prends soin de toi"];
</p>
<p>1ere phrase :</p>
<?php echo $salutations[0]." André, on se voit bientôt je vais fumer une clope, ".$salutations[2];?>
<p>2eme phrase</p>
<?php echo $salutations[1]." pas de réponse du coup je me demande ".$salutations[3];?>





