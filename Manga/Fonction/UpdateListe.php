<?php
    require "../../Session/BDD.php";

    $stmt = $_SQL->prepare("UPDATE `mangaUtilisateur` SET `nbrTomePosseder`=? WHERE `ID_Utilisateur`=? AND `ID`=? ");
    $stmt->execute(array($_POST['nbrTome'], $_POST['IDUtilisateur'], $_POST['IDManga']));
    $UpdateManga = $stmt->fetch();

?>