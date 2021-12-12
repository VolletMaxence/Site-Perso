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
            require "../../Session/BDD.php";

            $i = 0;
        ?>
        <!-- Pouvoir reprendre une shasse en cour
        Appuiez sur un bouton = +1 au conteur
        Choisir jeu dans lequel on shasse -->
        <div class="font-weight-normal">
            Vos Shiny : 
        </div>
        <?php
            $Pseudo = $_SESSION['username'];
            //Obtenir ID utilisateur pour infos
            $stmt = $_SQL->prepare("SELECT `ID` FROM `utilisateur` WHERE `username` = ?");
            $stmt->execute(array($Pseudo));
            $stmt = $stmt->fetch();
            //ID de l'utilisateur
            $ID = $stmt['ID'];
            $_SESSION['ID'] = $ID;
            console_log($ID);

            //ID	Nom	Rencontre	Version	ID_Utilisateur	Sexe Fini
            $stmt = $_SQL->prepare("SELECT * FROM `shiny` WHERE `ID_Utilisateur` = ?");
            $stmt->execute(array($ID));
            while($Shiny = $stmt->fetch())
            {
                //Affiche une fiche pour chaque poké
                AfficheInfoShiny($Shiny['Nom'], $Shiny['Rencontre'], $Shiny['Version'], $Shiny['Sexe'], $Shiny['Reset'], $Shiny['Fini'], $Shiny['ID'], $i);
                $i++;
            }

            echo "Nouvelle Chasse : "
            ?>
            <form>
                <select name="Jeu">
                    <option>Choisir le jeu :
                    <option disabled> Génération 2
                    <option>Or
                    <option>Argent
                    <option>Cristal
                    <option disabled> Génération 3
                    <option>Rubis
                    <option>Saphir
                    <option>Emeraude
                    <option>Rouge Feu
                    <option>Vert Feuille
                    <option disabled> Génération 4
                    <option>Diamant
                    <option>Perle
                    <option>Platine
                    <option>Hearthgold
                    <option>SoulSilver
                    <option disabled> Génération 5
                    <option>Noir
                    <option>Blanc
                    <option>Noir 2
                    <option>Blanc 2
                    <option disabled> Génération 6
                    <option>X
                    <option>Y
                    <option>Rubis Oméga
                    <option>Saphir Alpha
                    <option disabled> Génération 7
                    <option>Soleil
                    <option>Lune
                    <option>Ultra-Soleil
                    <option>Ultra-Lune
                    <option>Let's Go Pikachu
                    <option>Let's Go Evoli
                    <option disabled> Génération 8
                    <option>Epée
                    <option>Bouclier
                    <option>Diamant Étincelant
                    <option>Perle Scientillante
                </select>
                <!-- Choisir Pokémon -->
                <boutton class="btn btn-default" type="submit"> Confirmer </boutton>
            </form>
            <form>
                <select name="Poke">

                </select>
            </form>
    </body>
    <script src="Compteur.js"></script>
</html>