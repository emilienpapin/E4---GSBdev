<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Espace visiteur</title>
    </head>

    <body>
        <header>
          <?php 
          echo "&nbsp;&nbsp;&nbsp;&nbsp;Connecté : ".$_SESSION['pseudo']; ?>
            <h2>Visiteur médical</h2>
        </header>
    
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="/gsbDev/include/Deco.php">Se déconnecter</a></li>
                <li><a href="saisieFiche.php">Saisie fiche de frais</a></li>
                <li><a href="mesFiches.php">Mes fiches de frais</a></li>
            </ul>
        </nav>
    
        <section>
            <aside>
               
                
               
			<img alt="" src="espaceVi.png">
                        
	
                        
        
                        <div id ='a'>
                
                <p>Bienvenue sur votre espace client. Vous trouvez ici vos fiches de frais. </p>
                
                <p><i>Déconnectez-vous pour revenir à l'accueil.</i></p>
                
                <p><i>Votre session se déconnectera automatiquement après quelques minutes d'inactivité.</i></p>
                </div>
            </aside>
           
        </section>
    
    
        <footer>
            <p>Copyright Alan Chasles / Emilien Papin - Tous droits réservés

          
        </footer>
        
    </body>
</html>