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
            $ID = $_SESSION['ID'];
            console_log("ID : ".$ID);
            $_SESSION['IDPoke'] = NULL;
            console_log("IDPoke : ".$_SESSION['IDPoke']);

            //ID	Nom	Rencontre	Version	ID_Utilisateur	Sexe Fini
            $stmt = $_SQL->prepare("SELECT * FROM `shiny` WHERE `ID_Utilisateur` = ?");
            $stmt->execute(array($ID));
            while($Shiny = $stmt->fetch())
            {
                //Affiche une fiche pour chaque poké
                AfficheInfoShiny($Shiny['Nom'], $Shiny['Rencontre'], $Shiny['Version'], $Shiny['Sexe'], $Shiny['Reset'], $Shiny['Fini'], $Shiny['ID'], $i, $Shiny['Lien_Image']);
                $i++;
            }

            echo "Nouvelle Chasse : "
            ?>
            <form>
                <select id="Jeu">
                    <option>Choisir le jeu :
                    <option disabled> Génération 2
                    <option value="Or">Or
                    <option value="Argent">Argent
                    <option value="Cristal">Cristal
                    <option disabled> Génération 3
                    <option value="Rubis">Rubis
                    <option value="Saphir">Saphir
                    <option value="Emeraude">Emeraude
                    <option value="Rouge Feu">Rouge Feu
                    <option value="Vert Feuille">Vert Feuille
                    <option disabled> Génération 4
                    <option value="Diamant">Diamant
                    <option value="Perle">Perle
                    <option value="Platine">Platine
                    <option value="Hearthgold">Hearthgold
                    <option value="SoulSilvre">SoulSilver
                    <option disabled> Génération 5
                    <option value="Noir">Noir
                    <option value="Blanc">Blanc
                    <option value="Noir 2">Noir 2
                    <option value="Blanc 2">Blanc 2
                    <option disabled> Génération 6
                    <option value="X">X
                    <option value="Y">Y
                    <option value="Rubis Oméga">Rubis Oméga
                    <option value="Saphir Alpha">Saphir Alpha
                    <option disabled> Génération 7
                    <option value="Soleil">Soleil
                    <option value="Lune">Lune
                    <option value="Ultra-Soleil">Ultra-Soleil
                    <option value="Ultra-Lune">Ultra-Lune
                    <option value="Let's Go Pikachu">Let's Go Pikachu
                    <option value="Let's Go Evoli">Let's Go Evoli
                    <option disabled> Génération 8
                    <option value="Epée">Epée
                    <option value="Bouclier">Bouclier
                    <option value="Diamant Etincelant">Diamant Étincelant
                    <option value="Perle Scientillante">Perle Scientillante
                </select>
                <!-- Choisir Pokémon -->
            
            </form>
            <script type='text/javascript'>
                var Jeu = document.getElementById('Jeu').value;
                if(Jeu === 'Or' || Jeu === 'Argent' || Jeu === 'Cristal')
                {
                    var Image = "../../Dossier_Shiny/Gen2-shiny/";
                }else if (Jeu === 'Rubis' || Jeu === 'Saphir' || Jeu === 'Emeraude' || Jeu === 'Rouge Feu' || Jeu === 'Vert Feuille')
                {
                    var Image = "../../Dossier_Shiny/Gen3-shiny/";
                }else if (Jeu === 'Diamant' || Jeu === 'Perle' || Jeu === 'Platine' || Jeu === 'Hearthgold' || Jeu === 'Soulsilver' )
                {
                    var Image = "../../Dossier_Shiny/Gen4-shiny/";
                }else if (Jeu === 'Noir' || Jeu === 'Blanc' || Jeu === 'Noir 2' || Jeu === 'Blanc 2')
                {
                    var Image = "../../Dossier_Shiny/Gen5ani-shiny/";
                }else if (Jeu === 'X' || Jeu === 'Y' || Jeu === 'Rubis Oméga' || Jeu === 'Saphir Alpha')
                {
                    var Image = "../../Dossier_Shiny/ani-shiny/";
                }else if (Jeu ==='Soleil' || Jeu === 'Lune' || Jeu === 'Ultra-Soleil' || Jeu === 'Ultra-Lune' )
                {
                    var Image = "../../Dossier_Shiny/ani-shiny/";
                }else if (Jeu === "Let's Go Pikachu" || Jeu === "Let's Go Evoli")
                {
                    var Image = "../../Dossier_Shiny/ani-shiny/";
                }else if (Jeu === 'Epée' || Jeu === 'Bouclier')
                {
                    var Image = "../../Dossier_Shiny/ani-shiny/";
                }else if (Jeu === 'Diamant Etincelant' || Jeu === 'Perle Scientillante')
                {
                    var Image = "../../Dossier_Shiny/ani-shiny/";
                }
            </script>
            <!-- Créer les formulaire des listes de poké -->
    </body>
    <script src="Compteur.js"></script>
</html>