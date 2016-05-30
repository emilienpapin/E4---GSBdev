<?php
session_start();
$PARAM_hote = '172.16.99.3';
//$PARAM_port = '3306';
$PARAM_nom_bd = 'e.papin';
$PARAM_utilisateur = 'e.papin';
$PARAM_mot_passe = 's5dfxf12';

$connexion = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd,$PARAM_utilisateur,$PARAM_mot_passe);

$req = $connexion->query("SELECT * FROM visiteur WHERE login = '".$_POST['Login']."' AND mdp = '".$_POST['Mdp']."'");

$resultat = $req->fetch();

if($resultat['id'] != NULL){
    $_SESSION['pseudo'] = $resultat['nom']." ".$resultat['prenom'];  
    
    header('location:index.php');
}
else{
    header('location:formConnexion.php?message=Erreur : login ou mot de passe incorrect !');
    
}

?>
         
	
    
        
       



