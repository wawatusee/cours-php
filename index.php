<!doctype html>
<html lang="fr">
<head>
    <link href="css/style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Revisions web</title>
</head>
<body>
    <div class="grid-container">
        <header class="header">
        <h1>Révisions</h1>
        </header>
        <nav class="menu">
        <?php
            include('files/menu-cours-php.php');
        ?>
        </nav>
        <main class="main">
            <section>
                <article>
                    <?php
                    if(isset($_GET)){
                    $article=$_GET['lien'];
                    }else{
                        $article="06-conditions.php";
                    }
                    include('cours/'.$article);
                    ?>
                </article>
            </section>
        </main>
        <footer class="footer">
            <h1>FOOTER</h1>
        </footer>
    </div>
</body>
</html>