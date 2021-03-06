<?php
include '../../Menu/Menu.php'; // Hello Gros Chien //
include 'Shiny.php';
include "../../Session/BDD.php";
//include "Fonction/Compteur.php";
?>

<html lang="fr">
    <head>
        <!--Icone : -->
        <link rel="icon" href="../../Icone/Shellos-Icone.ico">
        <!-- Ajax -->
        <script src="../../JQuery.js" type="text/javascript"></script>
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <title> Site d'un bon Gros Chien - Pokémon - Compteur Reset Shiny</title>
    </head>
    <body>
        <?php

        $ID = $_SESSION['IDusername'];
        $Poke = $_SESSION['IDPoke'];
        
        console_log("ID Utilisateur : ".$_SESSION['IDusername']);
        console_log("ID Poké : ".$Poke);

        $stmt = $_SQL->prepare("SELECT * FROM `shiny` WHERE `ID`= ? AND `Fini` = 0 ");
        $stmt->execute(array($Poke));
        $Shiny = $stmt->fetch();

        //Récuperer le nombre de reset
        $nbrReset = $Shiny['Reset'];
        $ImageShiny = $Shiny['Lien_Image'];
        $NomPoke = $Shiny['Nom'];
        console_log("Lien GIF / PNG : ".$ImageShiny);
        //$Image = "../../Dossier_Shiny/ani-shiny/".$Shiny['Nom'].".gif";

        
        ?>
        <div id="Image" class="text-center">
            <img id="sprite" class="" src= <?= $ImageShiny ?> alt="Image de votre Shiny">
        </div>
        <script>
            var Sprite = document.getElementById("sprite");
            var SpriteWidth = Sprite.clientWidth;
            var SpriteHeight = Sprite.clientHeight;
            Sprite.style.width = (SpriteWidth * 2.5) + "px";
            Sprite.style.height = (SpriteHeight * 2.5) + "px";
        </script>
        <div id="Nombre" class="text-center display-1">
            <?= $nbrReset; ?>
        </div>

        <div id="ShasseButton" class="text-center">
            <button type="button" class="btn btn-outline-primary" id="plusUn" onclick="plusUn('<?= $nbrReset ?>','<?= $Poke ?>')"> +1 Reset </button>

            <button type="button" class="btn btn-outline-success" id="Fin" onclick="Fin('<?= $Poke ?>',' <?= $Shiny['Nom'] ?>',' <?= $ImageShiny ?>',' <?= $Shiny['Sexe'] ?>')"> Shiny Capturé </button>
            <!-- Boutton Retour -->
            <button type="button" class="btn btn-outline-warning" id="Attaque" onclick=Pause()> Stoper la shasse </button>
        </div>

        <div id="SexePoke" class="text-center">
            <p id="InfoSexePoke">Sexe de votre pokémon : </p>
            <div class="radio-inline">
            <input type="radio" id="Male" name="Sexe" value="Mâle" checked>
            <label for="Male">Mâle</label>
            </div>

            <div class="radio-inline">
            <input type="radio" id="Femelle" name="Sexe" value="Femelle">
            <label for="Femelle">Femelle</label>
            </div>

            <div style = "display:none">
            <input type="radio" id="Assexue" name="Sexe" value="Assexué">
            <label for="Assexue">Assexué</label>
            </div>
        </div>

    </body>
    <script src="Compteur.js"></script>
    <script language="javascript" type="text/javascript" src="Compteur.js"> function RadioButtonSexe'(<?php echo $NomPoke ?>)' </script>
</html>