<?php
    require "../../Session/BDD.php";

    $stmt = $_SQL->prepare("SELECT nbrTome FROM `manga` WHERE ID = ?");
    $stmt->execute(array($_POST['IDManga']));
    $nbrTomeManga = $stmt->fetch();

    echo $nbrTomeManga['nbrTome'];
    echo $_POST['nbrTome'];

    $stmt = $_SQL->prepare("UPDATE `manga` SET `nbrTome`=?,`Fini`=? WHERE `ID`=?");
    $stmt->execute(array($_POST['nbrTome'], $_POST['Fini'], $_POST['IDManga']));
    $UpdateManga = $stmt->fetch();
?>