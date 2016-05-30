     
<?php

$captcha = "Jah72";
$add = "alan.chasles@bts-malraux.net";
$objet = "Contact GSB";
$contenu = $POST_["civilite"].$POST_["nom"]." ".$POST_["prenom"]."vous a envoyé un message de type : ".$POST_["sujet"].".<br>Voici le contenu du message : <br><br>".$POST_["msg"];

if($POST_["cap"] == $captcha)
{
    mail($add, $objet, $contenu);
    header("location:contact.php?msg=Le mail a été envoyé avec succès ! Merci pour l'importance accordée à GSB, nous traiterons votre demande dès que possible.");
}
else{
    header("location:contact.php?msg=Captcha non valide !");
}


?>     

