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
            include "Liste/ListePoke.php";
            include "Liste/ListeMethode.php";
            $i = 1;
        ?>
        <!-- Pouvoir reprendre une shasse en cour
        Appuiez sur un bouton = +1 au conteur
        Choisir jeu dans lequel on shasse -->
        <div class="font-weight-normal">
            Vos Shiny : 
        </div>
        <?php
            $ID = $_SESSION['IDusername'];
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
            <form method="POST">
                <select id="Jeu"  name="Jeu">
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
                    <option value="SoulSilver">SoulSilver
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
            
                <?php
                    Liste();
                ?>
                <p classe="position-relative">ㅤ</p>
                <?php
                    ListeMethode();
                ?>
                <p classe="position-relative">ㅤ</p>
                <button type="submit" classe="position-relative" id="submit" name='submit' style="visibility: hidden;"> Lancer la nouvelle chasse </button>
            </form>
            <?php
            if(isset($_POST["submit"]))
            {
                $JeuShasse = NULL;
                $JeuShasse = $_POST['Jeu'];
                if(isset($JeuShasse))
                {
                    if($JeuShasse == 'Or' || $JeuShasse == 'Argent' || $JeuShasse == 'Cristal')
                    {
                        $PokeShasse = $_POST['Liste2G'];
                        $MethodeShasse = $_POST['ListeMethode2-3G'];
                        console_log("Jeu : ".$JeuShasse);
                        console_log("Poke : ".$PokeShasse);
                        console_log("Methode : ".$MethodeShasse);
                        $LienImage = "../../Dossier_Shiny/gen2-shiny/".$PokeShasse.".png";

                    } else if ($JeuShasse == 'Rubis' || $JeuShasse == 'Saphir' || $JeuShasse == 'Emeraude' || $JeuShasse == 'Rouge Feu' || $JeuShasse == 'Vert Feuille')
                    {
                        $PokeShasse = $_POST['Liste2G'];
                        $MethodeShasse = $_POST['ListeMethode2-3G'];
                        console_log("Jeu : ".$JeuShasse);
                        console_log("Poke : ".$PokeShasse);
                        console_log("Methode : ".$MethodeShasse);
                        $LienImage = "../../Dossier_Shiny/gen2-shiny/".$PokeShasse.".png";

                    } else if ($JeuShasse == 'Diamant' || $JeuShasse == 'Perle' || $JeuShasse == 'Platine' || $JeuShasse == 'Hearthgold' || $JeuShasse == 'SoulSilver')
                    {
                        $PokeShasse = $_POST['Liste4G'];
                        $MethodeShasse = $_POST['ListeMethode4G'];
                        console_log("Jeu : ".$JeuShasse);
                        console_log("Poke : ".$PokeShasse);
                        console_log("Methode : ".$MethodeShasse);
                        $LienImage = "../../Dossier_Shiny/gen4-shiny/".$PokeShasse.".png";

                    } else if ($JeuShasse == "Noir" || $JeuShasse == 'Blanc' || $JeuShasse =="Noir 2" || $JeuShasse =="Blanc 2")
                    {
                        $PokeShasse = $_POST['Liste5G'];
                        $MethodeShasse = $_POST['ListeMethode5G'];
                        console_log("Jeu : ".$JeuShasse);
                        console_log("Poke : ".$PokeShasse);
                        console_log("Methode : ".$MethodeShasse);
                        $LienImage = "../../Dossier_Shiny/gen5ani-shiny/".$PokeShasse.".gif";

                    }else if ($JeuShasse == "X" || $JeuShasse == "Y" || $JeuShasse == "Rubis Omega" || $JeuShasse =="Saphir Alpha")
                    {
                        $PokeShasse = $_POST['Liste6G'];
                        $MethodeShasse = $_POST['ListeMethode6G'];
                        console_log("Jeu : ".$JeuShasse);
                        console_log("Poke : ".$PokeShasse);
                        console_log("Methode : ".$MethodeShasse);
                        $LienImage = "../../Dossier_Shiny/ani-shiny/".$PokeShasse.".gif";

                    } else if ($JeuShasse == "Soleil" || $JeuShasse == "Lune")
                    {
                        $PokeShasse = $_POST['Liste7G'];
                        $MethodeShasse = $_POST['ListeMethode7G'];
                        console_log("Jeu : ".$JeuShasse);
                        console_log("Poke : ".$PokeShasse);
                        console_log("Methode : ".$MethodeShasse);
                        $LienImage = "../../Dossier_Shiny/ani-shiny/".$PokeShasse.".gif";

                    } else if ($JeuShasse == "Ultra-Soleil" || $JeuShasse == "Ultra-Lune")
                    {
                        $PokeShasse = $_POST['Liste7_2G'];
                        $MethodeShasse = $_POST['ListeMethode7_2G'];
                        console_log("Jeu : ".$JeuShasse);
                        console_log("Poke : ".$PokeShasse);
                        console_log("Methode : ".$MethodeShasse);
                        $LienImage = "../../Dossier_Shiny/ani-shiny/".$PokeShasse.".gif";

                    }else if ($JeuShasse == "Let's Go Pikachu" || $JeuShasse == "Let's Go Evoli")
                    {
                        $PokeShasse = $_POST['ListeLetsGo'];
                        $MethodeShasse = $_POST['ListeMethodeLetsGo'];
                        console_log("Jeu : ".$JeuShasse);
                        console_log("Poke : ".$PokeShasse);
                        console_log("Methode : ".$MethodeShasse);
                        $LienImage = "../../Dossier_Shiny/ani-shiny/".$PokeShasse.".gif";

                    }else if ($JeuShasse == 'Epée' || $JeuShasse == 'Bouclier')
                    {
                        $PokeShasse = $_POST['Liste8G'];
                        $MethodeShasse = $_POST['ListeMethode8G'];
                        console_log("Jeu : ".$JeuShasse);
                        console_log("Poke : ".$PokeShasse);
                        console_log("Methode : ".$MethodeShasse);
                        $LienImage = "../../Dossier_Shiny/ani-shiny/".$PokeShasse.".gif";
                    } else if ($JeuShasse == 'Diamant Etincelant' || $JeuShasse == 'Perle Scientillante')
                    {
                        $PokeShasse = $_POST['Liste4G'];
                        $MethodeShasse = $_POST['ListeMethode4G'];
                        console_log("Jeu : ".$JeuShasse);
                        console_log("Poke : ".$PokeShasse);
                        console_log("Methode : ".$MethodeShasse);
                        $LienImage = "../../Dossier_Shiny/ani-shiny/".$PokeShasse.".gif";
                    }
                    $req = "INSERT INTO `shiny`(`Nom`, `Rencontre`, `Version`, `ID_Utilisateur`, `Lien_Image`) VALUES (?,?,?,?,?)";
                    $stmt = $_SQL->prepare($req);
                    $stmt->execute(array($PokeShasse, $MethodeShasse, $JeuShasse, $ID, $LienImage));

                    //Refresh la page pour afficher le shiny
                    echo("<meta http-equiv='refresh' content='0'>");
                } else 
                {
                    console_log("TG");
                }
            }
            
            ?>
            <script type='text/javascript'>
                document.getElementById('Jeu').onchange = function() 
                {
                    var index = this.selectedIndex;
                    var Jeu = this.children[index].innerHTML.trim();

                    console.log(Jeu);
                    if(Jeu === 'Or' || Jeu === 'Argent' || Jeu === 'Cristal')
                    {
                        DeuxG()
                        var Image = "../../Dossier_Shiny/Gen2-shiny/";
                    }else if (Jeu === 'Rubis' || Jeu === 'Saphir' || Jeu === 'Emeraude' || Jeu === 'Rouge Feu' || Jeu === 'Vert Feuille')
                    {
                        TroisG()
                        var Image = "../../Dossier_Shiny/Gen3-shiny/";
                    }else if (Jeu === 'Diamant' || Jeu === 'Perle' || Jeu === 'Platine' || Jeu === 'Hearthgold' || Jeu === 'SoulSilver' )
                    {
                        QuatreG()
                        var Image = "../../Dossier_Shiny/Gen4-shiny/";
                    }else if (Jeu === 'Noir' || Jeu === 'Blanc' || Jeu === 'Noir 2' || Jeu === 'Blanc 2')
                    {
                        CinqG()
                        var Image = "../../Dossier_Shiny/Gen5ani-shiny/";
                    }else if (Jeu === 'X' || Jeu === 'Y' || Jeu === 'Rubis Oméga' || Jeu === 'Saphir Alpha')
                    {
                        SixG()
                        var Image = "../../Dossier_Shiny/ani-shiny/";
                    }else if (Jeu ==='Soleil' || Jeu === 'Lune')
                    {
                        SeptG()
                        var Image = "../../Dossier_Shiny/ani-shiny/";
                    }else if (Jeu === 'Ultra-Soleil' || Jeu === 'Ultra-Lune')
                    {
                        Sept_DeuxG()
                        var Image = "../../Dossier_Shiny/ani-shiny/";

                    }else if (Jeu === "Let's Go Pikachu" || Jeu === "Let's Go Evoli")
                    {
                        LetsGo()
                        var Image = "../../Dossier_Shiny/ani-shiny/";
                    }else if (Jeu === 'Epée' || Jeu === 'Bouclier')
                    {
                        HuitG()
                        var Image = "../../Dossier_Shiny/ani-shiny/";
                    }else if (Jeu === 'Diamant Étincelant' || Jeu === 'Perle Scientillante')
                    {
                        RemakeQuatreG()
                        var Image = "../../Dossier_Shiny/ani-shiny/";
                    }
                }
            </script>
            <!-- Créer les formulaire des listes de poké -->
    </body>
    <script src="Compteur.js"></script>
    <script src="AfficheForm.js"></script>
</html>