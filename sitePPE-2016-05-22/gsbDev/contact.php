<html>
    
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>
		
	</title>
	
	<link rel="stylesheet" type="text/css" href="Styles/Styles.css">
	
</head>



<body>
<h5 id ="haut"></h5>

<div id="global">

	
   <?php
              include('include/Entete.html');
              include("include/Menu.html");
        ?>
	
	<div id="contenu">
    
        <h3>Contacter <i><font color ="darkred">GSB</font></i></h3>
        <br><br>
        <form method='post' action = "mail.php">

        <fieldset>
            <legend>Identité</legend>
            <br>
            Civilité  &nbsp; &nbsp;&nbsp;    
            <input type="radio" name="civil" value = "M." id ="civil0"/><label for ="civil0" >M.</label>&nbsp;&nbsp;&nbsp;
            <input type="radio" name="civil" value ="Mme" id = "civil1" /><label for ="civil1" >Mme </label><br><br>
            Nom : <input type="text" name="nom"  size="15" /> &nbsp; &nbsp;&nbsp; 
            Prénom : <input type="text" name="prenom" size="15"/>&nbsp; &nbsp;&nbsp;
            @mail* : <input type="text" name ="mail" size ="15" required=""/>

        </fieldset>
        
        <br>
        
        <fieldset>
            <legend>Communiquer</legend><br>
    Sujet  &nbsp; &nbsp;&nbsp;    
            <input type="radio" name="sujet" value = "Suggestion" id ="sugg"/><label for ="sugg" >Suggestion</label>&nbsp;&nbsp;&nbsp;
            <input type="radio" name="sujet" value="Plainte" id ="plaint"/><label for = "plaint" >Plainte </label>&nbsp;&nbsp;&nbsp;
             <input type="radio" name="sujet" value="Question" id ="kestion"/><label for = "kestion">Question</label>&nbsp;&nbsp;&nbsp;
             <input type="radio" name="sujet" value ="Autre" id ="other"/><label for= "other" >Autre</label>&nbsp;&nbsp;&nbsp;
             <br><br>
             
             Message* : <br><br><TEXTAREA name="msg" rows=10 cols=50 required=""></TEXTAREA>
        </fieldset>
        <br>
        <fieldset>
            <legend>Vérification anti-bot</legend><br>
                <img src ="Images/captcha3.png ">
 
 Texte sur l'image : <input type="text" name="cap" id ="cap" size="5" required =""/>
        </fieldset>
   
        <br><br>
           
        <center>
       <input type ="reset" value ="Réinitialiser"/>
       &nbsp; &nbsp;&nbsp;
     
           <input type ="submit" value ="Envoyer !"/>
       
       
       
        </center>
 
            
        
    </form>
    
        </div>
    
    <div id="pied">
		
		<div id="copyright">
			Mise en page © 2015
                        
		</div>
                <a id = "RetourHaut" href ="#haut">Retour en haut de page</a>
	</div>
</body>
</html>
