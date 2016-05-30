<?php
session_start();


if($_SESSION['pseudo']){
echo "&nbsp;&nbsp;&nbsp;&nbsp;Connecté : ".$_SESSION['pseudo'];

    
?>

<br><br>
<form method="post" action="include/Deco.php">
    &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Se déconnecter">
</form>

<?php
}
?>