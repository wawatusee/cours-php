<header>
    <h1>Les conditions</h1>
</header>
    <body>
        <h2>Les conditions</h2>
        <p> Pour les exemples suivant, nous utiliserons la variable $secondes que nous obtiendrons grace à la fonction "date" qui a pour argument "s"(seconde) et qui renvoie les seconde de la date.</p>
        <pre class="code">echo $secondes=date("s");</pre>
        <?php
        echo $secondes=date("s");
        ?>
        <p>Les conditions permettent de tester différents cas de figure, c'est la base de la programmation. Une condition qui est toujours vrai ou toujours fausse est une condition inutile.</p>
        <h2>Si-if</h2>
        <p>Condition qui va vérifier si ce qui est passé en paramètre  vaut true ou false</p>
        <p>On vérifie si la division de nos secondes par 2 nous donne un reste (true)% est un modulo, sinon il envoie zéro, ce qui correspond à false.</p>
        <pre class="code">
            Code :
            if($secondes%2){
            echo "$secondes est un nombre impair";
            }
        </pre>
        <?php
        if($secondes%2){
            echo "$secondes est un nombre impair";
        };

        echo "<p>Autre manière de faire la même chose sans modulo</P>";
        ?>
        <pre class="code">
            Code : if(is_float($secondes/2)){
            echo "<p>$secondes est un nombre impair</p>";
        }</pre>
        <?php
        if(is_float($secondes/2)){
            echo "<p>$secondes est un nombre impair</p>";
        }
        //Secondes est au format texte, php a convertit automatiquement celui-ci en int pour le modulo
        var_dump($secondes);
        ?>
        <p>Autre manière de faire la même chose sans modulo</p>
        <pre class="code">
            Code : if(round($secondes)/2!=$secondes/2){
                echo "<p>$secondes est un nombre pair</p>";
            };
        </pre>
        <?php if(round($secondes)/2!=$secondes/2){
            echo "<p>$secondes est un nombre impair</p>";
        };
        ?>
        <h2>Sinon et else</h2>
        <p>Le sinon est appelé si la condition if à laquelle il est rattaché vaut false.</p>
        <p>SI</p>
        <?php
        if ($secondes%2){
            echo "<p>SI==false=>SINON|$secondes est un chiffre pair</p>";
        }
        ?>
        <pre class="code"> Code :
        if ($secondes%2){
            echo "<p>SI==false=>SINON|$secondes est un chiffre pair</p>"
        }
        </pre>
        <h2>SINON SI else if ou elseif</h2>
        <p><a href="https://www.php.net/manual/fr/control-structures.elseif.php">Manuel PHP-if-else</a></p>
        <p>Si ce que l'on doit vérifier n'est pas une condition binaire, on peut utiliser le else if : association du else et du if ou son raccourci: elseif</p>
        <p>Créons un tableau, avec des types de données différents : </p>
        <?php
        $aDonnees=[3,
            5.12,
            "coucou",
            true,
            ["yop",],
            false,
            null,
            ];
        ?>
        <pre class="code">
            $aDonnees=[3,
            5.12,
            "coucou",
            true,
            ["yop",],
            false,
            null,
            ];
        </pre>
        <p>On prend au hasard une clef du tableau, grace à la foction : array_rand()</p>
        <p>On utilise la fonction "is_" pour vérifier le type de la valeur de la variable en paramètre.</p>
        <pre class="code">Code :
        $randomKey=array_rand($aDonnees);
        $values=$aDonnees[$randomKey];
        var_dump($aDonnees);
        echo "We show the value of the array wich give the random key :";
        echo $values;
        if(is_float($values)){
                echo "the element is numeric ";
            }elseif (is_int($values)){
                echo "the element is an integer";
            }elseif (is_string($values)){
                echo "the element is a string";
            }elseif (is_array($values)){
                echo "the element is an array";
            } elseif (is_bool($values)){
                if($values){
                    echo "true is a right bolean ";
                }else{
                    echo "faux";
                }
            }
        </pre>
        <?php
        $randomKey=array_rand($aDonnees);
        $values=$aDonnees[$randomKey];
        var_dump($aDonnees);
        echo "<p>We show the value of the array wich give the random key :</p>";
        echo "<br>"."$values";
        if(is_float($values)){
                echo "the element is numeric ";
            }elseif (is_int($values)){
                echo "the element is an integer";
            }elseif (is_string($values)){
                echo "the element is a string";
            }elseif (is_array($values)){
                echo "the element is an array";
            } elseif (is_bool($values)){
                if($values){
                    echo "true is a right bolean ";
                }else{
                    echo "faux";
                }
            }
        ?>
    <pre class="code">Code :
    </pre>
    </body>

