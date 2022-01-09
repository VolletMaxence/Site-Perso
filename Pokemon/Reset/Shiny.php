<?php
function AfficheInfoShiny($Nom, $Rencontre, $Version, $Sexe, $Reset, $Fini, $IDPoke, $i, $Lien)
{
    //Créer une fiche pour montrer le poké
    ?>
    <div class="">
        <img class="fit-picture" src="">
        <?php
        echo $Version;
        echo $Nom;
        $IDPoke[$i] = $IDPoke;

        if($Fini == 1)
        {
            echo $Sexe;
            echo $Rencontre;
            ?>
                <img class="" src= <?= $Lien ?> alt="Image de votre Shiny">
            <?php
        } else 
        {
            ?>
                <img class="" src= <?= $Lien ?> alt="Image de votre Shiny">
            <?php
            
            //onclick : Redirection avec ID du poké stocké pour l'utiliser dans l autre page.
            $IDP = $IDPoke;
            console_log("IDPoke function Shiny.php : ".$IDPoke);
            ?>
            <form method="post" id="">
                <!-- value censer s'envoyer au serveur mais pas afficher sur page -->
                <input type="hidden" name="random" value="<?= $i ?>">
                <input name="IDPoke" type=submit class="btn btn-default" value="Reprendre la chasse (bon courage)">
            </form>
            <?php 
            if(isset($_POST['IDPoke']))
            {
                console_log('Appuis sur bouton : '.$IDPoke.' . ');
                console_log($_POST['random']);
                $IDP = $_POST['random'];
                console_log($IDP);
                $_SESSION['IDPoke'] = $IDP;
                ?>
                <meta http-equiv="Refresh" content="1; URL=Shasse.php">
                <?php
            }
        }
    ?>
    </div>
    <?php
}

function Retour()
{
    //echo "<script type='text/javascript'>document.location.replace('../../Pokemon/Reset');</script>";
}

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}

//send help
function list2G()
{
    ?>
        <select name="Jeu">
            <option value="bulbasaur"> "Bulbizarre </option>
            <option value="ivysaur"> Herbizarre </option>
            <option value="venusaur"> Florizarre </option>
            <option value="charmander"> Salamèche </option>
            <option value="charmeleon"> Reptincel </option>
            <option value="charizard"> Dracaufeu </option>
            <option value="squirtle"> Carapuce </option>
            <option value="wartortle"> Carabaffe </option>
            <option value="blastoise"> Tortank </option>
            <option value="caterpie"> Chenipan </option>
            <option value="metapod"> Chrysacier </option>
            <option value="butterfree"> Papilusion </option>
            <option value="weedle"> Aspicot </option>
            <option value="kakuna"> Coconfort </option>
            <option value="beedrill"> Dardargnan </option>
            <option value="pidgey"> Roucool </option>
            <option value="pidgeotto"> Roucoups </option>
            <option value="pidgeot"> Roucarnage </option>
            <option value="rattata"> Rattata </option>
            <option value="raticate"> Rattatac </option>
            <option value="spearow"> Piafabec </option>
            <option value="fearow"> Rapasdepic </option>
            <option value="ekans"> Abo </option>
            <option value="arbok"> Arbok </option>
            <option value="pikachu"> Pikachu </option>
            <option value="raichu"> Raichu </option>
            <option value="sandshrew"> Sabelette </option>
            <option value="sandslash"> Sablaireau </option>
            <option value="nidoranf"> Nidoran ♀ </option>
            <option value="nidorina"> Nidorina </option>
            <option value="nidoqueen"> Nidoqueen </option>
            <option value="nidoranm"> Nidoran ♂ </option>
            <option value="nidorino"> Nidorino </option>
            <option value="nidoking"> Nidoking </option>
            <option value="cleafairy"> Mélofée </option>
            <option value="clefable"> Mélodelfe </option>
            <option value="vulpix"> Goupix </option>
            <option value="ninetales"> Feunard </option>
            <option value="jigglypuff"> Rondoudou </option>
            <option value="wigglytuff"> Grodoudou </option>
            <option value="zubat"> Nosferapti </option>
            <option value="golbat"> Nosferalto </option>
            <option value="oddish"> Mystherbe </option>
            <option value="gloom"> Ortide </option>
            <option value="vileplum"> Rafflesia </option>
            <option value="paras"> Paras </option>
            <option value="parasect"> Parasect </option>
            <option value="venonat"> Mimitoss </option>
            <option value="venomoth"> Aéromite </option>
            <option value="diglett"> Taupiqueur </option>
            <option value="dugtrio"> Triopikeur </option>
            <option value="meowth"> Miaouss </option>
            <option value="persian"> Persian </option>
            <option value="psyduck"> Psykokwak </option>
            <option value="golduck"> Akwakwak </option>
            <option value="mankey"> Férosinge </option>
            <option value="primeape"> Colossinge </option>
            <option value="growlithe"> Caninos </option>
            <option value="arcanine"> Arcanin </option>
            <option value="poliwag"> Ptitard </option>
            <option value="poliwhirl"> Têtarte </option>
            <option value="poliwrath"> Tartard </option>
            <option value="abra"> Abra </option>
            <option value="kadabra"> Kadabra </option>
            <option value="alakazam"> Alakazam </option>
            <option value="machop"> Machoc </option>
            <option value="machoke"> Machopeur </option>
            <option value="machamp"> Mackogneur </option>
            <option value="bellsprout"> Chétiflor </option>
            <option value="weepinbell"> Boustiflor </option>
            <option value="victreebel"> Empiflor </option>
            <option value="tentacool"> Tentacool </option>
            <option value="tentacruel"> Tentacruel </option>
            <option value="geodude"> Racaillou </option>
            <option value="graveler"> Gravalanch </option>
            <option value="grolem"> Grolem </option>
            <option value="ponyta"> Ponyta </option>
            <option value="rapidash"> Galopa </option>
            <option value="slowpoke"> Ramoloss </option>
            <option value="slowbro"> Flagadoss </option>
            <option value="magnemite"> Magnéti </option>
            <option value="magneton"> Magnéton </option>
            <option value="farfetch'd"> Canarticho </option>
            <option value="doduo"> Doduo </option>
            <option value="dodrio"> Dodrio </option>
            <option value="seel"> Otaria </option>
            <option value="dewgong"> Lamantine </option>
            <option value="grimer"> Tadmorv </option>
            <option value="muk"> Grotadmorv </option>
            <option value="shellder"> Kokiyas </option>
            <option value="cloyster"> Crustabri </option>
            <option value="gastly"> Fantominus </option>
            <option value="haunter"> Spectrum </option>
            <option value="gengar"> Ectoplasma </option>
            <option value="onix"> Onix </option>
            <option value="drowzee"> Soporifik </option>
            <option value="hypno"> Hypnomade </option>
            <option value="krabby"> Krabby </option>
            <option value="kingler"> Krabboss </option>
            <option value="voltorb"> Voltorbe </option>
            <option value="electrode"> Electrode </option>
            <option value="exeggcute"> Noeunoeuf </option>
            <option value="exeggutor"> Noadkoko </option>
            <option value="cubone"> Osselait </option>
            <option value="marowak"> Ossatueur </option>
            <option value="hitmonlee"> Kicklee </option>
            <option value="hitmonchan"> Tygnon </option>
            <option value="lickitung"> Excelangue </option>
            <option value="koffing"> Smogo </option>
            <option value="weezing"> Smogogo </option>
            <option value="rhyhorn"> Rhinocorne </option>
            <option value="rhydon"> Rhinoféros </option>
            <option value="chansey"> Leveinard </option>
            <option value="tangela"> Saquedeneu </option>
            <option value="kangashkan"> Kangourex </option>
            <option value="horsea"> Hypotrempe </option>
            <option value="seadra"> Hypocéan </option>
            <option value="goldeen"> Poissirène </option>
            <option value="seaking"> Poissoroy </option>
            <option value="staryu"> Stari </option>
            <option value="starmie"> Staross </option>
            <option value="mrmime"> M.Mime </option>
            <option value="Scyther"> Insécateur </option>
            <option value="Jynx"> Lippoutou </option>
            <option value="electabuzz"> Elektek </option>
            <option value="magmar"> Magmar </option>
            <option value="pinsir"> Scarabrute </option>
            <option value="tauros"> Tauros </option>
            <option value="magikarp"> Magicarpe </option>
            <option value="gyarados"> Léviator </option>
            <option value="lapras"> Lokhlass </option>
            <option value="ditto"> Métamorph </option>
            <option value="eevee"> Evoli </option>
            <option value="vaporean"> Aquali </option>
            <option value="jolteon"> Voltali </option>
            <option value="flareon"> Pyroli </option>
            <option value="porygon"> Porygon </option>
            <option value="omanyte"> Amonita </option>
            <option value="omastar"> Amonistar </option>
            <option value="kabuto"> Kabuto </option>
            <option value="Kabutops"> Kabutops </option>
            <option value="aerodactyl"> Ptéra </option>
            <option value="snorlax"> Ronflex </option>
            <option value="articuno"> Artikodin </option>
            <option value="zapdos"> Electhor </option>
            <option value="moltres"> Sulfura </option>
            <option value="dratini"> Minidraco </option>
            <option value="dragonair"> Draco </option>
            <option value="dragonite"> Dracolosse </option>
            <option value="mewtwo"> Mewtwo </option>
            <option value="mew"> Mew </option>
            <option value="chikorita"> Germignon </option>
            <option value="bayleef"> Macronium </option>
            <option value="meganium"> Méganium </option>
            <option value="cyndaquil"> Héricendre </option>
            <option value="quilava"> Feurisson </option>
            <option value="typhlosion"> Typhlosion </option>
            <option value="totodile"> Kaiminus </option>
            <option value="croconow"> Crocrodil </option>
            <option value="feraligator"> Aligatueur </option>
            <option value="sentret"> Fouinette </option>
            <option value="furret"> Fouinar </option>
            <option value="hoothoot"> Hoothoot </option>
            <option value="noctowl"> Noarfang </option>
            <option value="ledyba"> Coxy </option>
            <option value="ledian"> Coxyclaque </option>
            <option value="spinarak"> Mimigal </option>
            <option value="ariados"> Migalos </option>
            <option value="crobat"> Nostenfer </option>
            <option value="cinchou"> Loupio </option>
            <option value="lanturn"> Lanturn </option>
            <option value="pichu"> Pichu </option>
            <option value="cleffa"> Mélo </option>
            <option value="igglubuff"> Toudoudou </option>
            <option value="togepi"> Togepi </option>
            <option value="togetic"> Togetic </option>
            <option value="natu"> Natu </option>
            <option value="xatu"> Xatu </option>
            <option value="mareep"> Wattouat </option>
            <option value="flaaffy"> Lainergie </option>
            <option value="ampharos"> Pharamp </option>
            <option value="bellossom"> Joliflor </option>
            <option value="marill"> Marill </option>
            <option value="azumarill"> Azumarill </option>
            <option value="sudowoodo"> Simularbre </option>
            <option value="politoed"> Tarpaud </option>
            <option value="hoppip"> Granivol </option>
            <option value="skiploom"> Floravol </option>
            <option value="jumpluff"> Cotovol </option>
            <option value="aipom"> Capumain </option>
            <option value="sunkern"> Tournegrin </option>
            <option value="sunflora"> Héliatronc </option>
            <option value="yanma"> Yanma </option>
            <option value="wooper"> Axoloto </option>
            <option value="quagsire"> Maraiste </option>
            <option value="espeon"> Mentali </option>
            <option value="umbreon"> Noctali </option>
            <option value="murkrow"> Cornèbre </option>
            <option value="slowking"> Roigada </option>
            <option value="misdreavus"> Feuforêve </option>
            <option value="zarbi"> Zarbi </option>
            <option value="wobbuffet"> Qulbutoké </option>
            <option value="girafarig"> Girafarig </option>
            <option value="pineco"> Pomdepik </option>
            <option value="forretress"> Foretress </option>
            <option value="dunsparce"> Insolourdo </option>
            <option value="gligar"> Scorplane </option>
            <option value="steelix"> Steelix </option>
            <option value="snubbull"> Snubbull </option>
            <option value="granbull"> Granbull </option>
            <option value="qwilfish"> Qwilfish </option>
            <option value="scizor"> Cizayox </option>
            <option value="shuckle"> Caratroc </option>
            <option value="heracross"> Scarhino </option>
            <option value="sneasel"> Farfuret </option>
            <option value="teddiursa"> Teddiursa </option>
            <option value="ursaring"> Ursaring </option>
            <option value="slugma"> Limagma </option>
            <option value="magcargo"> Volcaropod </option>
            <option value="swinub"> Marcacrin </option>
            <option value="piloswine"> Cochignon </option>
            <option value="corsola"> Corayon </option>
            <option value="remoraid"> Rémoraid </option>
            <option value="octillery"> Octillery </option>
            <option value="delibird"> Cadoizo </option>
            <option value="mantine"> Démanta </option>
            <option value="skarmory"> Airmure </option>
            <option value="houndour"> Malosse </option>
            <option value="houndoom"> Démolosse </option>
            <option value="kingdra"> Hyporoi </option>
            <option value="phanpy"> Phanpy </option>
            <option value="donphan"> Donphan </option>
            <option value="porygon2"> Porygon2 </option>
            <option value="stantler"> Cerfrousse </option>
            <option value="smeargle"> Queulorior </option>
            <option value="tyrorgue"> Debugant </option>
            <option value="hitmontop"> Kapoera </option>
            <option value="smoochum"> Lippouti </option>
            <option value="elekid"> Elekid </option>
            <option value="magby"> Magby </option>
            <option value="miltank"> Écrémeuh </option>
            <option value="blissey"> Leuphorie </option>
            <option value="raikou"> Raikou </option>
            <option value="entei"> Entei </option>
            <option value="suicune"> Suicune </option>
            <option value="larvitar"> Embrylex </option>
            <option value="pupitar"> Ymphect </option>
            <option value="tyranitar"> Tyranocif </option>
            <option value="lugia"> Lugia </option>
            <option value="hooh"> Ho-Oh </option>
            <option value="celebi"> Celebi </option>
        </select>
    <?php
}

function list3G()
{
    ?>
    <select name="Jeu">

    </select>
    <?php
}

function list4G()
{
    ?>
    <select name="Jeu">

    </select>
    <?php
}

function list5G()
{
    ?>
    <select name="Jeu">

    </select>
    <?php
}

function list6G()
{
    ?>
    <select name="Jeu">

    </select>
    <?php
}

function list7G()
{
    ?>
    <select name="Jeu">

    </select>
    <?php
}

function listLetsGo()
{
    ?>
    <select name="Jeu">

    </select>
    <?php
}

function list8G()
{
    ?>
    <select name="Jeu">

    </select>
    <?php
}