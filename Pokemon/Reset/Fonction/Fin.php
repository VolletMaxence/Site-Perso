<?php
    require "../../../Session/BDD.php";

    //liste des noms de poké uniquement femelle
    if($Sexe == "Femelle")
    {
        if(
            $Nom == "nidoranf" ||
            $Nom == "nidorina" ||
            $Nom == "nidoqueen" ||
            $Nom == "chansey" ||
            $Nom == "kangashkan" ||
            $Nom == "jynx" ||
            $Nom == "smoochum" ||
            $Nom == "miltank" ||
            $Nom == "blissey" ||
            $Nom == "illumise" ||
            $Nom == "latias" ||
            $Nom == "wormadam" ||
            $Nom == "vespiquen" ||
            $Nom == "happiny" ||
            $Nom == "froslass" ||
            $Nom == "cresselia" ||
            $Nom == "petill" ||
            $Nom == "lilligant" ||
            $Nom == "vullaby" ||
            $Nom == "mandibuzz" ||
            $Nom == "flabebe" ||
            $Nom == "floette" ||
            $Nom == "florges" ||
            $Nom == "salazzle" ||
            $Nom == "bounsweet" ||
            $Nom == "steenee" ||
            $Nom == "tsareena" ||
            $Nom == "hatenna" ||
            $Nom == "hattrem" ||
            $Nom == "hatterene" ||
            $Nom == "milcrery" ||
            $Nom == "alcremie")
        {
            $stmt = $_SQL->prepare("UPDATE `shiny` SET `Sexe`= 'Femelle' WHERE `ID`= ? ");
            $stmt->execute(array($_POST['ID']));
            $Shiny = $stmt->fetch() ;
        } else {
            $stmt = $_SQL->prepare("UPDATE `shiny` SET `Sexe`= 'Femelle' WHERE `ID`= ? ");
            $stmt->execute(array($_POST['ID']));
            $Shiny = $stmt->fetch() ;

            //Liste des pokémon avec un dimorphisme sexuel
            
            //Update du lien pour l'image (regex)

        }
    } else if ($Sexe == "Assexue")
    {
        $stmt = $_SQL->prepare("UPDATE `shiny` SET `Sexe`= '' WHERE `ID`= ? ");
        $stmt->execute(array($_POST['ID']));
        $Shiny = $stmt->fetch() ;
    }


    $stmt = $_SQL->prepare("UPDATE `shiny` SET `Fini`= 1 WHERE `ID`= ? ");
    $stmt->execute(array($_POST['ID']));
    $Shiny = $stmt->fetch() ;

    echo json_encode(array('ID' => $_POST['ID']));
?>