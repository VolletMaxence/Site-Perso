<html>
    <head>
        <!--Icone : -->
        <link rel="icon" href="../../Icone/Shellos-Icone.ico">
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <title> Site d'un bon Gros Chien - Pokémon - Compteur Reset Shiny</title>
    </head>
    <body>
        <?php
        include '../../Menu/Menu.php'; // Hello Gros Chien //
        include 'Shiny.php';
        include "../../Session/BDD.php"

        $ID = $_SESSION['ID'];
        $Poke = $_SESSION['Shasse'];
        
        $stmt = $_SQL->prepare("SELECT * FROM `shiny` WHERE `ID_Utilisateur`= ? AND `Fini` is NULL AND `Nom`= ? ");
        $stmt->execute(array($ID, $Poke));
        $Shiny = $stmt->fetch();



        echo $Shiny['nbrReset'];
        
        ?>

        <button type="button" id="Reset" onclick=Reset()> +1 Reset </button>

        <button type="button" id="Fin" onclick=Fin()> Shiny Capturé </button>

        <button type="button" id="attaque" onclick=Pause()> Stoper la shasse (ce sera save) </button>

        <!-- Détecter quand on appuis sur un boutton -> ajout de 1 -->
        <!-- Boutton Retour -->

    </body>
</html>