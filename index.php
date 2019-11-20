<?php
    include('configurations/config.php');
    include('configurations/fonctions.php');
    $db = $_SESSION['db'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="ressources/images/icons/logo.png">
    <title>Tomorrowland Winter 2019</title>
</head>
<body>
    <nav>
    <audio autoplay loop>
        <source src="ressources/audio/intro.mp3" type="audio/mp3">
    </audio>
        <div id="user">
            <img src="ressources/images/divers/papillon.jpg">
            <?php if(isset($login)){echo "<a style=\"text-decoration: none;\"href=\"profil.php\"><h2>$login</h2></a>";} ?>
        </div>
        <div id="liens">
            <a href="index.php">Accueil</a>
            <a href="livre-or.php">Livre d'or</a>
            <a href="commentaire.php">Poster un commentaire</a>
            <?php if(isset($login)){echo "<a href=\"index.php?disc\" style=\"color: red;\">Se déconnecter</a>";}else{ echo "<a href=\"login.php\">Inscription/Connexion</a>";} ?>
        </div>
    </nav>
    <main id="main_index">
        <header id="haut">
            <a href="#bas"><img src="ressources/images/divers/arrow.png"></a>
        </header>
        <section id="bas">
            <a href="#haut"><img src="ressources/images/divers/arrow.png"></a>
            <article>
                <div id="title">
                    <h1>Tomorrowland Winter 2019 Edition</h1>
                </div>
                <div id="content">
                    <p>Bienvenue sur le livre d'or de Tomorrowland Winter Édition 2019 vous pouvez lire les commentaires laissés par les fans et poster le votre.</p>
                    <video autoplay muted loop>
                        <source src="ressources/videos/presentation.mp4" type="video/mp4">
                        Votre navigateur ne supporte pas les vidéos
                    </video>
                </div>
            </article>
        </section>
    </main>
</body>
</html>