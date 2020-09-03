<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>incrémentation</title>
</head>
<body>
<h2>Constantes</h2>
<p>Une constante est une sorte de variable qui ne varie pas(sauf depuis php7)</p>
<p>Pour écrire une constante on respecte quelques règles :</p>
<ul>
    <li>Nom dse constantes en majuscules</li>
    <li>Pas de $ au début</li>
    <li>On la remplit avec des chaines de caractères</li>
    <li>Des boléens ou des numériques</li>
    <li>Depuis php7, on peut y mettre des tableaux et des objets</li>
    <li>Une majuscule</li>
</ul>

<pre class="code">Code :
    define("LULU", 'ceci est lulu');
echo LULU;
    </pre>

<?php
define("LULU", 'ceci est lulu');
echo LULU;
?>
<p>Le nom est toujours en majuscules et le séparateur l'underscore.</p>
<pre class="code">Code :
    define("DB_HOST", "localhost");
define("DB_NAME", "lulu");
echo "<hr>DB_HOST ou {DB_HOST} ne sont pas interprétés même dans les doubles guillemets!<br>";
echo "Concaténation obligatoire pour voir la valeur de DB_HOST : ".DB_HOST;
    </pre>

<?php
define("DB_HOST", "localhost");
define("DB_NAME", "lulu");
echo "<hr>DB_HOST ou {DB_HOST} ne sont pas interprétés même dans les doubles guillemets!<br>";
echo "Concaténation obligatoire pour voir la valeur de DB_HOST : ".DB_HOST;
?>
</body>
</html>