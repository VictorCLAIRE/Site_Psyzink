<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title><?= $title ?></title>

</head>

<body>
    <header>
        <div class="topnav" id="myTopnav">
            <img class="logo" src="img/logotext.jpeg" alt="Psy-zink">
            <a class="nav" href="accueil.php">Accueil</a>
            <a class="nav" href="decoration.php">Décoration</a>
            <a class="nav" href="sonorisation.php">Sonorisation</a>
            <a class="nav" href="restauration.php">Restauration</a>
            <a class="nav" href="chillout.php">Chill-out</a>
            <a class="nav" href="contact.php">Contact</a>

        </div>
    </header>

    <div class="container-fluid">
        <?= $content ?>
    </div>
</body>
</html>