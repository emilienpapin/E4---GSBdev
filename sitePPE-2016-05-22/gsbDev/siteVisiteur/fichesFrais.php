<?php
    if($_POST['annee'] && $_POST['mois']){
        switch($_POST['mois']){
            case "Janvier" : $mois = "01";
                    break;
                case "Fevrier" : $mois = "02";
                    break;
                case "Mars" : $mois = "03";
                    break;
                case "Avril" : $mois = "04";
                    break;
                case "Mai" : $mois = "05";
                    break;
                case "Juin" : $mois = "06";
                    break;
                case "Juillet" : $mois = "07";
                    break;
                case "Août" : $mois = "08";
                    break;
                case "Septembre" : $mois = "09";
                    break;
                case "Octobre" : $mois = "10";
                    break;
                case "Novembre" : $mois = "11";
                    break;
                case "Décembre" : $mois = "12";
                    break;
        }
$PARAM_hote = '172.16.99.3';
//$PARAM_port = '3306';        
$PARAM_nom_bd = 'e.papin';
$PARAM_utilisateur = 'e.papin';
$PARAM_mot_passe = 's5dfxf12';
$connexion = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd,$PARAM_utilisateur,$PARAM_mot_passe);   
        
$req = $connexion->query("select quantite, idFraisForfait from lignefraisforfait inner join visiteur on visiteur.id = lignefraisforfait.idVisiteur where mois =".$_POST['annee'].$mois." and nom =".$_SESSION["nom"]." and prenom =".$_SESSION['prenom']);

$req2 = $connexion->query("select date, libelle, montant from lignefraishorsforfait inner join visiteur on visiteur.id = lignefraishorsforfait.idVisiteur where mois =".$_POST['annee'].$mois." and nom =".$_SESSION["nom"]." and prenom =".$_SESSION['prenom']);
    } 
    
    
    ?>

 <?php
$PARAM_hote = '172.16.99.3';
     
$PARAM_nom_bd = 'e.papin';
$PARAM_utilisateur = 'e.papin';
$PARAM_mot_passe = 's5dfxf12';
$connexion = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd,$PARAM_utilisateur,$PARAM_mot_passe);

$req = $connexion->query("SELECT login,mdp FROM visiteur WHERE login = ".$POST_['Login']."AND mdp = ".$POST_['Mdp']);
        
        // Stop 2
echo "<center><table><tr>
       <th>Quantité</th>
       <th>Forfait</th>
       
   </tr>";
         $resultats=$connexion->query("select quantite, idFraisForfait from lignefraisforfait inner join visiteur on visiteur.id = lignefraisforfait.idVisiteur where mois =".$_POST['annee'].$mois." and nom =".$_SESSION["nom"]." and prenom =".$_SESSION['prenom']);
        while( $ligne = $resultats->fetch() )
        {
            echo '
                  <tr>
                    <td>'.$ligne['quantite'].'</td>
                    <td>'.$ligne['idFraisForfait']. '</td>
                    
                  <tr>
                


            ';
        }
        $resultats->closeCursor();
        
        echo '</table></center>';
        
        echo "<br><br>";
        
	
        ?>

 <?php
$PARAM_hote = '172.16.99.3';
     
$PARAM_nom_bd = 'e.papin';
$PARAM_utilisateur = 'e.papin';
$PARAM_mot_passe = 's5dfxf12';
$connexion = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd,$PARAM_utilisateur,$PARAM_mot_passe);

$req = $connexion->query("SELECT login,mdp FROM visiteur WHERE login = ".$POST_['Login']."AND mdp = ".$POST_['Mdp']);
        
        // Stop 2
echo "<center><table><tr>
       <th>Date</th>
       <th>Libelle</th>
       <th>Montant</th>
   </tr>";
         $resultats=$connexion->query("select date, libelle, montant from lignefraishorsforfait inner join visiteur on visiteur.id = lignefraishorsforfait.idVisiteur where mois =".$_POST['annee'].$mois." and nom =".$_SESSION["nom"]." and prenom =".$_SESSION['prenom']);
        while( $ligne = $resultats->fetch() )
        {
            echo '
                  <tr>
                    <td>'.$ligne['date'].'</td>
                    <td>'.$ligne['libelle']. '</td>
                    <td>'.$ligne['montant'].'</td>
                  <tr>
                


            ';
        }
        $resultats->closeCursor();
        
        echo '</table></center>';
        
        echo "<br><br>";
        
	
        ?>



