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
                <li><a href="include/Deco.php">Se déconnecter</a></li>
                <li><a href="saisieFiche.php">Saisie fiche de frais</a></li>
                <li><a href="mesFiches.php">Mes fiches de frais</a></li>
            </ul>
        </nav>
    
        <section>
            <aside> 
            	<img alt="" src="mesFiches.png">
                
                
                <p><b>Sélectionnez une date :</b></p>
                <form method ="post" action ="fichesFrais.php">
                <table border= 0 >
                    
                   
                    <th>
                    <SELECT name ="annee">
                        
                        <OPTION VALUE="2014">2014</OPTION>
                        <OPTION VALUE="2013">2013</OPTION>
                       
                    </SELECT>
                        </th>
                    <th>
                        
                         <SELECT name ="mois">
                        <OPTION VALUE="Janvier">Janvier</OPTION>
                        <OPTION VALUE="Février">Février</OPTION>
                        <OPTION VALUE="Mars">Mars</OPTION>
                        <OPTION VALUE="Avril">Avril</OPTION>
                        <OPTION VALUE="Mai">Mai</OPTION>
                        <OPTION VALUE="Juin">Juin</OPTION>
                        <OPTION VALUE="Juillet">Juillet</OPTION>
                        <OPTION VALUE="Août">Août</OPTION>
                        <OPTION VALUE="Septembre">Septembre</OPTION>
                        <OPTION VALUE="Octobre">Octobre</OPTION>
                        <OPTION VALUE="Novembre">Novembre</OPTION>
                        <OPTION VALUE="Décembre">Décembre</OPTION>
                    </SELECT>
                        
                        
                    
                </th>
                </table>
                
                    
                       <br>
           
        <center>
       <input type ="reset" value ="Réinitialiser"/>
       &nbsp; &nbsp;&nbsp;
     
           <input type ="submit" value ="Envoyer !"/>
       
       
                
                <br><br>
       
        </center>
                </form>
            </aside>
    
    
    
    
    
        </section>
    
    
     <footer>
            <p>Copyright Alan Chasles / Emilien Papin - Tous droits réservés

          
        </footer>
        
    </body>
</html>