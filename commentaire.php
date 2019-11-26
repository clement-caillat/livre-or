<?php
    include('configurations/config.php');
    include('configurations/fonctions.php');
    $db = $_SESSION['db'];
    if(empty($_SESSION['username']))
    {
        header('Location: login.php');
    }
    if(isset($_GET['post_comment']))
    {
        post();
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="ressources/images/icons/logo.png">
    <title>Poster un commentaire | Tomorrowland Winter 2019</title>
</head>
<body>
    <nav>
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
    <main id="main_livre-or">
        <section id="section_livre-or">
            <div class="post" id="create_post"style="margin-top: 19%;">
                <div id="user_info">
                    <h3 style="text-align: center; color: violet;"><?php echo $login ?></h3>
                </div>
                <div class="user_message">
                    <form action="commentaire.php" method="get" style="height: 80%;">
                      <textarea name="comment" placeholder="Votre message"></textarea>
                      <input type="submit" name="post_comment" value="Poster">
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>
</html>