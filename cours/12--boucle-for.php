<!doctype html>
<html lang="fr">
<head>
    <link href="css/style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>La boucle for</h2>
<p>For est principalement utilisée pour effectuer une boucle liée à des valeurs numériques</p>
<p>Structure for(initialisation; condition; incrementation/décrémentation ou autre modification)</p>
<pre class="code">
    for ($i=1;$i<22;i++){
    echo "ligne$i";
    }
</pre>
<?php
for ($i=1;$i<22;$i++){
    echo "ligne$i ","| <br>";
}
?>
</body>
</html>
