<?php
    require "../../../Session/BDD.php";

    echo '<script>';
    echo 'console.log('. json_encode( $_POST['Sexe'] ) .')';
    echo '</script>';
    //liste des noms de poké uniquement femelle
    if($_POST['Sexe'] == "Femelle")
    {
        if(
            $_POST['Nom'] == "nidoranf" ||
            $_POST['Nom'] == "nidorina" ||
            $_POST['Nom'] == "nidoqueen" ||
            $_POST['Nom'] == "chansey" ||
            $_POST['Nom'] == "kangashkan" ||
            $_POST['Nom'] == "jynx" ||
            $_POST['Nom'] == "smoochum" ||
            $_POST['Nom'] == "miltank" ||
            $_POST['Nom'] == "blissey" ||
            $_POST['Nom'] == "illumise" ||
            $_POST['Nom'] == "latias" ||
            $_POST['Nom'] == "wormadam" ||
            $_POST['Nom'] == "vespiquen" ||
            $_POST['Nom'] == "happiny" ||
            $_POST['Nom'] == "froslass" ||
            $_POST['Nom'] == "cresselia" ||
            $_POST['Nom'] == "petill" ||
            $_POST['Nom'] == "lilligant" ||
            $_POST['Nom'] == "vullaby" ||
            $_POST['Nom'] == "mandibuzz" ||
            $_POST['Nom'] == "flabebe" ||
            $_POST['Nom'] == "floette" ||
            $_POST['Nom'] == "florges" ||
            $_POST['Nom'] == "salazzle" ||
            $_POST['Nom'] == "bounsweet" ||
            $_POST['Nom'] == "steenee" ||
            $_POST['Nom'] == "tsareena" ||
            $_POST['Nom'] == "hatenna" ||
            $_POST['Nom'] == "hattrem" ||
            $_POST['Nom'] == "hatterene" ||
            $_POST['Nom'] == "milcrery" ||
            $_POST['Nom'] == "alcremie")
        {
            $stmt = $_SQL->prepare("UPDATE `shiny` SET `Sexe`= 'Femelle' WHERE `ID`= ? ");
            $stmt->execute(array($_POST['ID']));
            $Shiny = $stmt->fetch() ;
        } else 
        {
            $stmt = $_SQL->prepare("UPDATE `shiny` SET `Sexe`= 'Femelle' WHERE `ID`= ? ");
            $stmt->execute(array($_POST['ID']));
            $Shiny = $stmt->fetch() ;

            //Update du lien pour l'image (regex)
            //Vérifier si l'image existe (file_exists())
            $LienCut = explode(".", $_POST['Path']);
            
            //gif
            $PathFemelle = "../..".$LienCut[4]."-f.".$LienCut[5];
            $PathFemelleTest = "../../..".$LienCut[4]."-f.".$LienCut[5];

            if (file_exists($PathFemelleTest)) 
            {
                echo "L'image du pokémon en femelle existe";
                $stmt = $_SQL->prepare("UPDATE `shiny` SET `Lien_Image`= ? WHERE `ID`= ? ");
                $stmt->execute(array($PathFemelle, $_POST['ID']));
                $Shiny = $stmt->fetch() ;
            } else 
            {
                echo "L'image du pokémon en femelle n'existe pas : ". $PathFemelle;
            }
        }
    } else if ($_POST['Sexe'] == "Assexue")
    {
        $stmt = $_SQL->prepare("UPDATE `shiny` SET `Sexe`= '' WHERE `ID`= ? ");
        $stmt->execute(array($_POST['ID']));
        $Shiny = $stmt->fetch() ;
    } else 
    {
        $stmt = $_SQL->prepare("UPDATE `shiny` SET `Sexe`= 'Mâle' WHERE `ID`= ? ");
        $stmt->execute(array($_POST['ID']));
        $Shiny = $stmt->fetch() ;
    }

    $stmt = $_SQL->prepare("UPDATE `shiny` SET `Fini`= 1 WHERE `ID`= ? ");
    $stmt->execute(array($_POST['ID']));
    $Shiny = $stmt->fetch() ;

    echo json_encode(array('ID' => $_POST['ID'], 'Nom' => $_POST['Nom']));
?>