<?php
include '../../Menu/Menu.php'; // Hello Gros Chien //
include 'Shiny.php';
include "../../Session/BDD.php";
?>

<html>
    <head>
        <!--Icone : -->
        <link rel="icon" href="../../Icone/Shellos-Icone.ico">
        <!-- Ajax -->
        <script src="JQuery.js" type="text/javascript"></script>
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <title> Site d'un bon Gros Chien - Pokémon - Compteur Reset Shiny</title>
    </head>
    <body>
        <?php

        $ID = $_SESSION['ID'];
        $Poke = $_SESSION['IDPoke'];
        
        console_log($_SESSION['ID']);


        $stmt = $_SQL->prepare("SELECT * FROM `shiny` WHERE `ID`= ? AND `Fini` = 0 ");
        $stmt->execute(array($Poke));
        $Shiny = $stmt->fetch();

        
        $nbrReset = $Shiny['Reset'];
        $nbrReset = 0;
        
        ?>
        <div id="Nom" class="">
            <?= $Shiny['Nom'];?>
        </div>
        <div id="Nombre" class="">
            <?= $nbrReset; ?>
        </div>

        <button type="button" id="plusUn" onclick=plusUn()> +1 Reset </button>

        <button type="button" id="Fin" onclick=Fin()> Shiny Capturé </button>
        <!-- Boutton Retour -->
        <button type="button" id="Attaque" onclick=Pause()> Stoper la shasse (ce sera save) </button>

    </body>
    <script src="Compteur.js"></script>
</html>