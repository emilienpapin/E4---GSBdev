<html>
    
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>
	Formulaire Connexion	
	</title>
	
	<link rel="stylesheet" type="text/css" href="Styles/Styles.css">
	
</head>

<body>
<h5 id ="haut"></h5>
<div id="global">

	<?php 
        include('include/Entete.html');
        include('include/Menu.html');
        ?>
		
	<div id="contenu">
            
            <form method="post" action="Connexion.php">
                <fieldset>
                <legend>Connexion</legend>
                <label for="Login">Login&nbsp;:&nbsp;&nbsp;</label>
                <input type ="text" name="Login" id ="Login"/>
                <br><br>
                <label for="Mdp">Mot de passe&nbsp;:&nbsp;&nbsp;</label>
                <input type ="password" name="Mdp" id ="Mdp"/>
                <br><br>
                <input type="submit" value="Se connecter">
                <input type ="reset" value="Réinitialiser">
                </fieldset>
            </form>
	</div>
    
    
        <?php
	include('include/Pied.html');
        ?>
</div>


</body>
   
    
</html>
