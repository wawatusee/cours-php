<!doctype html>
<html lang="en">
<head>
    <link href="css/style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Types-de-variables</title>
</head>
<body>
<h1>Les types de variables</h1>
<p>Les variables en php sont locales par défaut, elles commencent par le signe $</p>
<h2>Le boléens</h2>
<p>2 valeurs possibles : true ou false</p>
<?php
//Declaration des variables
$bool=true;
$bool2=false;
echo '<pre>'.'var_dump($bool,$bool2)'.'va nous afficher : <br>';
var_dump($bool,$bool2);
echo '</pre>';
//Affichage des variables
echo "$bool est le résultat renvoyé par echo si la variable est true";
echo"<br>";
echo '$bool est non-interprété entre simples guillemets';
echo"<br>";
echo $bool2;
echo"<br>";
echo '$bool2 a pour valeur d\'affichage :"rien", ppour l\'afficher dans cette ligne ligne cette phrase est écrite entre simples guillemets';
echo"<br>";
echo 'Pour concatèner '.'j\'ajoute des points '.'entre chaque élément que je veux ajouter à une phrase en mélangeant variables et texte ';
?>
<h2>Les variables de type texte-text-string-str</h2>
<p>Les variables de type string sont très utilisé&es, elles sont également les plus risquées à manipuler.</p>
<?php
$text="bonjour";
$text2='les amis';
echo "$text $text2";
echo"<br>";
echo '$text $text2';
echo"<br>";
echo $text.' '.$text2;
echo"<br>";
echo "Pour afficher cette phrase à partir de variables, j'ai écrit : ".'<i>$text.\' \'.$text2</i>';
//deuxième concaténation
echo "<br>",$text,"",$text2;
$textedeBDD="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at leo eleifend mauris sodales dignissim. Proin sodales elit luctus nisi venenatis, sit amet faucibus augue semper. Praesent scelerisque libero et tempor tempus. Suspendisse accumsan purus at enim consectetur tristique. Duis venenatis id ante vitae rhoncus. Etiam condimentum tristique lectus, vitae auctor eros gravida ac. Mauris a consectetur sem. Integer augue sem, tincidunt ac urna sit amet, posuere cursus tortor. Suspendisse tristique sed elit vel ultrices. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque consectetur semper fermentum. Integer nulla tellus, accumsan in commodo eget, cursus quis urna. Curabitur magna tellus, mollis at felis ac, iaculis tempor risus. Suspendisse potenti. Duis vitae nibh id augue pellentesque pretium vel a purus. Sed ut aliquet risus.

Fusce euismod, nulla a rhoncus faucibus, arcu massa fermentum ex, id malesuada eros magna sit amet lectus. Proin fermentum ultricies auctor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sit amet ante vel metus vulputate placerat vel eget sem. Ut pharetra lectus nec euismod malesuada. Nullam vel elit ex. Suspendisse euismod nisl at lorem feugiat suscipit. Suspendisse bibendum, lorem sed volutpat vulputate, erat sapien ornare metus, et consequat justo lacus quis est. Nam a ex tincidunt, consectetur erat vel, porta enim. Vivamus ornare tortor quis leo pellentesque, ac egestas urna scelerisque. Ut a nulla ut quam luctus scelerisque. Morbi bibendum neque eget iaculis lacinia. Mauris ante tellus, pretium sit amet quam in, tristique lacinia tortor. Sed hendrerit auctor ultricies. Quisque molestie arcu libero, nec lacinia leo tincidunt sagittis. Quisque at nisl leo.

Pellentesque sit amet finibus nunc. Sed tincidunt sodales ante ac maximus. Sed diam lacus, suscipit sed laoreet sit amet, pulvinar non ligula. Duis vel sapien urna. Donec scelerisque, metus vitae convallis convallis, felis est fermentum leo, a tristique quam ante vel leo. Integer luctus condimentum augue eu fermentum. Vestibulum auctor dui a facilisis mollis. Morbi lorem lectus, accumsan pellentesque ligula sed, pulvinar commodo sem. Nullam laoreet hendrerit urna, eu efficitur magna rhoncus hendrerit. Proin vitae risus non purus tristique fringilla sed ut ex. Nullam scelerisque et augue et semper.

Quisque posuere arcu sed lorem egestas, id auctor nisl dignissim. Morbi pulvinar semper mi, id efficitur magna facilisis eget. Nullam efficitur vulputate dolor, nec porttitor magna pulvinar nec. Pellentesque gravida urna eu turpis convallis, et bibendum dui consequat. Suspendisse vel tellus nisi. Suspendisse commodo hendrerit lectus a viverra. Pellentesque ultricies hendrerit orci, sed maximus lacus convallis vel. Mauris mattis quis metus ac dignissim. Sed maximus neque nec posuere porta.";
echo '<pre>'.'var_dump($text,$text2)'.'va nous afficher : <br>';
var_dump($text,$text2);
echo '</pre>';
echo "La fonction PHP : <i>nl2br</i> permet de récupérer les retour à la ligne qui ont été tapés dans du code, fonction utilisée juste : ".nl2br($textedeBDD);
//var dump permet de debugger les variables
var_dump($bool,$bool2);
?>
<h2>Les variables de type numérique</h2>
<p>Les variables de type int permettent de manipuler les chiffres sans virgules, positif et négatifs</p>
<?php
$int=0;
$int2=5;
$int3=-7;
var_dump($int3);
?>
<h2>Les variables de type numérique à virgules flottantes</h2>
<p>Les variables de type float, fonctionent comme les int, attention on utilise les . à la place de la virgule comme limite des décimales.</p>
<?php
$float=0.0000012;
$float1=-17.42;
$float2=25.08;
echo '<pre>'.'var_dump($float,$float1,$float2)'.'va nous afficher : <br>';
var_dump($float,$float1,$float2);?>
</pre>
<h2>Les variables de type Tableaux</h2>
<p>Les variables de type tableau. les tableaux sont des conteneurs pouvant contenir de multiples éléments.</p>
<?php
$array=[$float,$float1,$float2];
$array1=["lapin","carotte","pluie"];
$array2=[$int,$float2,"pluie"];
echo '<pre>'.'var_dump($array,$array1,$array2)'.'va nous afficher : <br>';
var_dump($array);
var_dump($array1);
var_dump($array2);
echo '<p>pour cibler les éléments d\'un tableau, j\'appelle le tableau :$array[2] et j\'obtiens :';
echo $array[2].'<br>';
echo 'Nombre d\'éléments dans $array2 : '.sizeof($array2).'</pre>';
for($i=0;$i<sizeof($array2);$i++){
    $elementListe=$array2[$i];
    echo $elementListe.'<br>';
}

?>
<h3>Les tableaux indexés</h3>
<p>Ce sont les tableaux par défaut qui ont comme clefs des numériques</p>
<?php
//On crée un tableau
$tableau=array(
        "Vache",
        "Ane",
        "Biche"
);
var_dump($tableau);
echo '<br>Tout pourri le tableau pseudo indexé, au milieu d\'un tableau, je colle "    6=>"lézard", ce qui attribue la clef 6 à l\'élément  lézard, mauvaise pratique, exemple :<br>';
//tableau pseudo indexé, mauvaise pratique
$tableau2=[
    "Vache",
    "Ane",
    "Biche",
    6=>"lézard",
];
var_dump($tableau2);
?>
<h3>Les tableaux associatifs</h3>
<p>Les tableaux associatifs utilisent comme clefs des noms</p>

<?php
$tabAssoc=[
        "id"=>7,
        "login"=>"lulu",
        "themail"=>"lulu@gmail.com",
];
var_dump($tabAssoc);
echo "<br>";
echo "id vaut :".$tabAssoc['id']."<br>";
?>
<h4>Les tableaux sont "multidimensionnels"</h4>
<?php
$superArray=[
                [
                "id"=>1,
                "titre"=>"dessert",
                "texte"=>"glace",

                ],
                [
                    "id"=>2,
                    "titre"=>"tarte?",
                    "texte"=>"tourte",
                ],
                [
                    "id"=>3,
                    "titre"=>"salade ",
                    "texte"=>[
                        "salade pecheur",
                        "salade liégeoise",
                        "salade a la grecque"
                    ]
                ]
            ];
echo "Un tableau multidimensionnel affiché avec varDump :<br> ";
var_dump($superArray);
echo "Un tableau multidimensionnel affiché avec print_r :<br> ";
print_r($superArray);
?>
<br>
<b>Exercice</b><br>
<p>Composer une phrase en utilisant des éléments du super tableaux défini ci-dessus</p>.
<?php
print "J'hésite entre un ".$superArray[0]["titre"]." et une ".$superArray[2]["titre"]." allez! Je vais me taper une ".$superArray[2]["texte"][2];
?>
</body>
</html>
