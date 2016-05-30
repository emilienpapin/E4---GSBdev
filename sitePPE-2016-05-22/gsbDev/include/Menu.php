
<html>
    <head>
        <title>Menu</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <center><div id="navigation">
                <center><ul>
			<li><a href="index.php">Accueil</a></li>
			<li><a href="liste.php">Coordonnées</a></li>
			<li><a href="medic.php">Médicaments</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <?php
                        session_start();
                        if($_SESSION['pseudo']){
                        echo '<li><a href="siteVisiteur/index.php">Mon espace</a></li>';
                        }
                        else
                        {
                        echo '<li><a href="formConnexion.php">Connexion</a></li>';
                        }
                        ?>
		</ul>
                </center>
        </div></center>
    </body>
</html>


