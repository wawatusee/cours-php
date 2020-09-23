<h1>for each</h1>
<h2>Sur un tableau indexé</h2>
<p>For each est une façon simple de parcourir des tableaux ou des objets.</p>


<pre class="code">Code :
    // Tableaux contenant tous les stagiaires de la classe.
$stagiaire = ["Mattia", "Karim", "Lorenzo", "Bryan", "Laetitia", "Rocio", "Audrey", "Marjorie", "Jessica", "Alain", "Jonathan", "Chihab", "Kieran", "Adrien", "Clovis", "Thomas", "Saadallah", "Virgile",];
//On va juste récupérer les valeurs et les afficher, le as crée un alias qui est modifié à chaque itération tant qu'il y a des éléments dans le tableau.
foreach ($stagiaires as $valeur){
    echo"$valeur |";
    </pre>

<?php
// Tableaux contenant tous les stagiaires de la classe.
$stagiaire = ["Mattia", "Karim", "Lorenzo", "Bryan", "Laetitia", "Rocio", "Audrey", "Marjorie", "Jessica", "Alain", "Jonathan", "Chihab", "Kieran", "Adrien", "Clovis", "Thomas", "Saadallah", "Virgile",];
//On va juste récupérer les valeurs et les afficher, le as crée un alias qui est modifié à chaque itération tant qu'il y a des éléments dans le tableau.
foreach ($stagiaire as $valeur){
    echo"$valeur |";
};
?>
<h3>Que la valeur avec as $key=>$value</h3>
<pre class="code">Code :
//On va juste récupérer les valeurs et les afficher, le as crée un alias qui est modifié à chaque itération tant qu'il y a des éléments dans le tableau.
foreach ($stagiaire as $clef=>$valeur){
    echo"$clef=> $valeur |";
};
    </pre>

<?php
//On va juste récupérer les valeurs et les afficher, le as crée un alias qui est modifié à chaque itération tant qu'il y a des éléments dans le tableau.
foreach ($stagiaire as $clef=>$valeur){
    echo"$clef=> $valeur |";
};
?>
<h4>Sur un tableau réellement indexé, on peut aussi utiliser les boucles for, while et même do while</h4>
<p>Exemple avec for </p>
<pre class="code">Code :
    //Count compte le nombre de stagiaires dans le tableau, si le tableau n e change pas le nombre de valeurs pendant la structure itérative, il vaut mieux éviter de le mettre dans la condition du for pour éviter que l'on recompte

echo "<hr>";
$nb_stagiaire=count($stagiaire);
echo '$nb_stagiaire, équivaut à count($stagiaire), vaut : ', $nb_stagiaire;
echo "<hr>";
for($i=0;$i<$nb_stagiaire;$i++){
    echo "$i=>$stagiaire[$i]|";
};
    </pre>

<?php
//Count compte le nombre de stagiaires dans le tableau, si le tableau n e change pas le nombre de valeurs pendant la structure itérative, il vaut mieux éviter de le mettre dans la condition du for pour éviter que l'on recompte

echo "<hr>";
$nb_stagiaire=count($stagiaire);
echo '$nb_stagiaire, équivaut à count($stagiaire), vaut : ', $nb_stagiaire;
echo "<hr>";
for($i=0;$i<$nb_stagiaire;$i++){
    echo "$i=>$stagiaire[$i]|";
};
?>

