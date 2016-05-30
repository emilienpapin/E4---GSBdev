
<html>
    
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>
	Coordonnées
	</title>
	
	<link rel="stylesheet" type="text/css" href="Styles/Styles.css">
	
</head>

<body>
<h5 id ="haut"></h5>
<div id="global">


	<?php 
        include('include/Entete.html');
        include('include/Menu.php');
        
        
        ?>
    
    <div id = "contenu">
        
        <?php
        
        include("include/Co.php");
        
        ?>
	
    <style media="all" type="text/css">
table {
border: medium solid #9FC5EA;
border-collapse: collapse;
width: 50%;
color : #9FC5EA;
}
th {
font-family: monospace;
border: thin solid #9FC5EA;
width: 50%;
padding: 5px;
background-color: #D0E3FA;
background-image: url(http://images.forwallpaper.com/files/thumbs/preview/20/201116__texture-texture-blue-color-abrasion_p.jpg);
}
td {
font-family: sans-serif;
border: thin solid #9FC5EA;
width: 50%;
padding: 5px;
text-align: center;
background-color: #ffffff;
background-image: url(http://images.forwallpaper.com/files/thumbs/preview/25/259275__gray-texture-wallpaper-grey_p.jpg);
}
caption {
font-family: sans-serif;
}
        
</style>
	
	
	<!--<div id="contenu">
            <center> <img alt="" src="http://image.noelshack.com/fichiers/2015/05/1422539135-listemedecins2.png"></center>
	</div>-->
        <?php
$PARAM_hote = '172.16.99.3';     
$PARAM_nom_bd = 'e.papin';
$PARAM_utilisateur = 'e.papin';
$PARAM_mot_passe = 's5dfxf12';
$connexion = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd,$PARAM_utilisateur,$PARAM_mot_passe);


        
        // Stop 2
echo "<center><table><tr>
       <th>Prénom</th>
       <th>Nom</th>
       <th>Spécialité</th>
   </tr>"; 
         $resultats=$connexion->query("SELECT * FROM medecin");
        while( $ligne = $resultats->fetch() )
        {
            echo '
                  <tr>
                    <td>'.$ligne['prenom'].'</td>
                    <td>'.$ligne['nom']. '</td>
                    <td>'.$ligne['specialisation'].'</td>
                  <tr>
                


            ';
        }
		
		
        $resultats->closeCursor();
        
        echo '</table></center>';
        
        echo "<br><br>";
        
	
        ?>
        
</div>
            
            <?php
                
                include('include/Pied.html');
                
                ?>
        
</div>


</body>
   
    
</html>