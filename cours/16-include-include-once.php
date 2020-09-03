<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Include</title>
</head>
<body>
<h2>Include</h2>
<p>On utilise include pour incorporer du code dans une autre page, généralement on l'utilise que pour les fichiers non critiques, on peut l'utiliser plusieurs fois</p>

<pre class="code">Code :
include "16-b.php";
    </pre>

<?php
include "16-b.php";
?>
<h2>Include_once</h2>
<p>On utilise include_once mais ne recharge jamais le fichier plus d'une fois.</p>

<pre class="code">Code :
include_once "16-c.php";
include_once "16-c.php";
    </pre>

<?php
include_once "16-c.php";
include_once "16-c.php";
?>
</body>
</html>