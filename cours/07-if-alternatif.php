<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>If-alternatif</h2>
    <p>Il existe une multitude de manières de faire des "if":</p>
    <p>L'écriture : </p>
    <p>On peut utiliser le if sans {}, généralement sur une ligne ou quelques unes</p>
    <pre class="code">Code :
            echo "<p>Tirons deux chiffres au hasard</p>";
            echo '<p>Fonctions pour un chiffre au hasard : mat_rand(), <a href="https://www.php.net/manual/fr/function.mt-rand.php" target="blank">Fonction mat_rand-Manuel PHP</a>; random_int</p>';
            $randomKey=array_rand([1,2,3,4,5,6,7,8,9,10]);
            $hasard=random_int(1,10);
            var_dump($randomKey);
            echo $hasard;
            if($hasard<5) echo"<p>hasard est plus petit que 5.</p>"
    </pre>
    <p>Qui produit :</p>
    <?php
    echo "<p>Tirons deux chiffres au hasard</p>";
    echo '<p>Fonctions pour un chiffre au hasard : mat_rand(), <a href="https://www.php.net/manual/fr/function.mt-rand.php" target="blank">Fonction mat_rand-Manuel PHP</a>; random_int</p>';
    $randomKey=array_rand([1,2,3,4,5,6,7,8,9,10]);
    $hasard=random_int(1,10);
    var_dump($randomKey);
    echo $hasard;
    if($hasard<5) echo"<p>hasard est plus petit que 5.</p>"
    ?>
    <p>On peut utiliser des écritures alternatives</p>
    <pre class="code">Code :
    var_dump($randomKey);
    echo $hasard;
    if($hasard<5):
        echo"<p>hasard est plus petit que 5.</p>";
    else :
        echo"<p>hasard est plus grand que 5.</p>";
    endif;
    </pre>
    <p>Qui produit :</p>
    <?php
    var_dump($randomKey);
    echo $hasard;
    if($hasard<5):
        echo"<p>hasard est plus petit que 5.</p>";
    else :
    echo"<p>hasard est plus grand que 5.</p>";
    endif;
    ?>
    <p>Ou une écriture dite ternaire.</p>
    <pre class="code">Code :
    echo($hasard>5) ?  "<p>Hasard est plus grand que 5</p>"
    : "<p>est plus petit que 5</p>";
    </pre>
    <p>Qui produit :</p>
    <?php
    echo($hasard>5) ?  "<p>Hasard est plus grand que 5</p>"
    : "<p>est plus petit que 5</p>";
    ?>
    <h2>Les switch</h2>
    <p>Les switch sont une alternative au if elseif et else, ils vérifient l'égalité du contenu d'une variable</p>
    <pre class="code">Code :
    <--!<a href="?id-1">1</a>|<a href="?id-2">2</a>|<a href="?id-3">3</a>|<a href="?id-4">4</a>|<a href="?id-5">5</a>-->
    </pre>
    <p>Qui produit :</p>
    <p>Pages : <a href="?id-1">1</a>|<a href="?id-2">2</a>|<a href="?id-3">3</a>|<a href="?id-4">4</a>|<a href="?id-5">5</a></p>
    <p>La variable de type get nommée id apparait quand on clique sur un des liens ci-dessus, elle contient un numérique de 1 à 6, nous allons utiliser un switch pour afficher des pages différentes.</p>
    <p>On va vérifier la valeur de la variable get nommée id, $_GET['id'], si elle existe isset : est initialisée.</p>
    <pre class="code">Code :
    if(isset($_GET['id'])){
        $idido=$_GET['id'];
        //Sinon elle n'existe pas
        }else{
        $idido=1;
        }
    switch ($idido){

    }
    var_dump($_GET);
    </pre>
    <p >Qui produit :</p>
    <?php
    if(isset($_GET['id'])){
        $idido=$_GET['id'];
        //Sinon elle n'existe pas
        }else{
        $idido=1;
        }
    switch ($idido){
        case  1:
            echo "Nous sommes sur la page1 de notre site";
            break;
        case 2:
            echo "Salut";
            break;
        case 3:
            include "01-hello-world.php";
    }
    var_dump($_GET);
    ?>
</body>
</html>