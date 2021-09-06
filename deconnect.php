<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="content">
            <h2>Vous êtes déconnecté de votre compte</h2>

            <!--  Lien de Reconnexion -->
                <a href='login.php'><span>Reconnexion</span></a>

            <!-- redirection vers la page de connexion -->
            <?php header('login.php');?>
        </div>
    </body>
</html>