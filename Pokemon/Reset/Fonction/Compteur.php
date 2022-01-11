<?php
    
    $nbrReset = $nbrReset++;
    console_log( "dezbhfdze ".$nbrReset);

    $stmt = $_SQL->prepare("UPDATE `shiny` SET `Reset`= ? WHERE `ID_Utilisateur`= ? AND `Nom`= ? AND `Fini` = 0 ");
    $stmt->execute(array($nbrReset, $Poke, $ID));
    $Shiny = $stmt->fetch();

?>