<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Require</title>
</head>
<body>
<h2>Require et require_once</h2>
<p>
    On utilise le require pour chargerr les fichiers importants et/ou de configuration, en cas d'erreur le script, en cas d'erreur le script est automatiquement arrété.
</p>

<pre class="code">Code :
    require "17-b.php"
    </pre>

<?php
require "17-b.php"

?>
<h2>Require_once</h2>
<p>
    On utilise le require_once pour charger une page externe mais avec require_once, on s'assure qu'il n'est chargé qu'une seule fois. Très pratique pour les fichiers de configuration. En cas d'erreur le script s'arrète.
</p>

<pre class="code">Code :
require_once "17-b.php";
require_once "17-b.php";
    </pre>

<?php
require_once "17-b.php";
require_once "17-b.php";
?>
</body>
</html>