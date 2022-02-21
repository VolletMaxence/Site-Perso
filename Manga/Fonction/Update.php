<?php
    require "../../Session/BDD.php";


    $stmt = $_SQL->prepare("SELECT nbrTome FROM `manga` WHERE ID = ?");
    $stmt->execute(array($_POST['IDManga']));
    $nbrTomeManga = $stmt->fetch();

    echo $nbrTomeManga['nbrTome'];
    echo $_POST['nbrTome'];

    if ($_POST['nbrTome'] <= $nbrTomeManga['nbrTome'])
    {
        
        $stmt = $_SQL->prepare("INSERT INTO `mangaUtilisateur`(`ID_Utilisateur`, `ID_Manga`, `nbrTomePosseder`) VALUES (?,?,?)");
        $stmt->execute(array($_POST['IDUtilisateur'], $_POST['IDManga'], $_POST['nbrTome']));
        $UpdateManga = $stmt->fetch();
    } else 
    {
        echo "Vous ne pouvez pas avoir plus de manga que ce qui est déjà sortit.";
    }
?>