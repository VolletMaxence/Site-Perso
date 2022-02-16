//Ajout de 1 au compteur
function plusUn(nbrReset, Poke)
{
    let currentValue = document.getElementById( "Nombre" ).innerHTML;

    $.ajax({
        url : 'Fonction/Compteur.php',
        type : 'POST',
        data : { ID: Poke, nbrReset: currentValue},

        success : function(code_html, statut)
        {
            console.log( code_html );
            Value = parseInt( currentValue );
            Value++
            document.getElementById( "Nombre" ).innerHTML = Value;

        },
        error : function(code_html, statut)
        {
            alert("Erreur");
        },
    })
}

//Le pokémon a été capturé
function Fin(Poke, Nom, Path, SexePoke)
{
    //Afficher un formulaire pour ajouter des information
    SexePoke = document.querySelector('input[name="Sexe"]:checked').value;

    let currentValue = document.getElementById( "Nombre" ).innerHTML;
    $.ajax({
        url : 'Fonction/Fin.php',
        type : 'POST',
        data : { ID: Poke, nbrReset: currentValue, Sexe: SexePoke, Nom: Nom, Path: Path},

        success : function(code_html, statut)
        {
            //Redirection vers page principal
            document.location.href="../Reset"; 

        },
        error : function(code_html, statut)
        {
            alert("Erreur");
        },
    })
}

function Pause()
{
    document.location.href="../Reset"; 
}

function RadioButtonSexe(Name)
{
    console.log("RadioButtonSexe");
    //Liste Poké mâle
    if(
        Name == nidoranm ||
        Name == nidorino ||
        Name == nidoking ||
        Name == hitmonlee ||
        Name == hitmonchan ||
        Name == tauros ||
        Name == tyrorgue ||
        Name == hitmontop ||
        Name == volbeat ||
        Name == latios ||
        Name == mothim ||
        Name == Gallade ||
        Name == throh ||
        Name == sawk ||
        Name == rufflet ||
        Name == braviary ||
        Name == tornadus ||
        Name == thundurus ||
        Name == landorus ||
        Name == impidimp ||
        Name == morgrem ||
        Name == grimmsnarl)
    {
        console.log("Male");
        document.getElementById("Male").checked = true;
        document.getElementById("SexePoke").style.display = none;
        document.getElementById("InfoSexePoke").style.display = none;
        document.getElementById("Male").style.display = none;
        document.getElementById("Femelle").style.display = none;
        document.getElementById("Assexue").style.display = none;
    } /* Liste Poké uniquement femelle */ else if (
        Name == nidoranf ||
        Name == nidorina ||
        Name == nidoqueen ||
        Name == chansey ||
        Name == kangashkan ||
        Name == jynx ||
        Name == smoochum ||
        Name == miltank ||
        Name == blissey ||
        Name == illumise ||
        Name == latias ||
        Name == wormadam ||
        Name == vespiquen ||
        Name == happiny ||
        Name == froslass ||
        Name == cresselia ||
        Name == petill ||
        Name == lilligant ||
        Name == vullaby ||
        Name == mandibuzz ||
        Name == flabebe ||
        Name == floette ||
        Name == florges ||
        Name == salazzle ||
        Name == bounsweet ||
        Name == steenee ||
        Name == tsareena ||
        Name == hatenna ||
        Name == hattrem ||
        Name == hatterene ||
        Name == milcrery ||
        Name == alcremie
    )
    {
        console.log("Femelle");
        document.getElementById("Femelle").checked = true;
        document.getElementById("SexePoke").style.display = none;
        document.getElementById("InfoSexePoke").style.display = none;
        document.getElementById("Male").style.display = none;
        document.getElementById("Femelle").style.display = none;
        document.getElementById("Assexue").style.display = none;
    } /*liste Poké assexue */ else if (
        Name == magnemite ||
        Name == magneton ||
        Name == voltorb ||
        Name == Electrode ||
        Name == staryu ||
        Name == starmie ||
        Name == ditto ||
        Name == porygon ||
        Name == articuno ||
        Name == zapdos ||
        Name == moltres ||
        Name == mewtwo ||
        Name == mew ||
        Name == zarbi ||
        Name == porygon2 ||
        Name == raikou ||
        Name == entei ||
        Name == suicune ||
        Name == lugia ||
        Name == hooh ||
        Name == celebi ||
        Name == shedinja ||
        Name == lunatone ||
        Name == solroc ||
        Name == baltoy ||
        Name == claydol ||
        Name == beldum ||
        Name == metang ||
        Name == metagross ||
        Name == regirock ||
        Name == regice ||
        Name == registeel ||
        Name == kyogre ||
        Name == groudon ||
        Name == rayquaza ||
        Name == jirachi ||
        Name == deoxis ||
        Name == bronzor ||
        Name == bronzong ||
        Name == magnezone ||
        Name == porygonz ||
        Name == rotom ||
        Name == uxie ||
        Name == mesprit ||
        Name == azelf ||
        Name == dialga ||
        Name == palkia ||
        Name == heatran ||
        Name == regigigas ||
        Name == giratina ||
        Name == cresselia ||
        Name == phione ||
        Name == manaphy ||
        Name == darkrai ||
        Name == shaymin ||
        Name == arceus ||
        Name == victini ||
        Name == klink ||
        Name == klang ||
        Name == klinklang ||
        Name == cryogonal ||
        Name == golett ||
        Name == golurk ||
        Name == cobalion ||
        Name == terrakion ||
        Name == virizion ||
        Name == reshiram ||
        Name == zekrom ||
        Name == kyurem ||
        Name == keldeo ||
        Name == meloetta ||
        Name == genesect ||
        Name == carbink ||
        Name == xerneas ||
        Name == yveltal ||
        Name == zygarde ||
        Name == diancie ||
        Name == hoopa ||
        Name == volcanion ||
        Name == typenull ||
        Name == silvally ||
        Name == minior ||
        Name == dhelmise ||
        Name == tapukoko ||
        Name == tapulele ||
        Name == tapubulu ||
        Name == tapufini ||
        Name == cosmog ||
        Name == cosmoem ||
        Name == solgaleo ||
        Name == lunala ||
        Name == nihilego ||
        Name == buzzwole || 
        Name == pheromosa ||
        Name == xurkitree || 
        Name == celesteela ||
        Name == kartana ||
        Name == guzzlord ||
        Name == necrozma ||
        Name == magearna ||
        Name == marshadow ||
        Name == poipole ||
        Name == naganadel ||
        Name == stakataka || 
        Name == blacephalon ||
        Name == zeraora ||
        Name == meltan ||
        Name == melmetal ||
        Name == sinistea ||
        Name == poteageist ||
        Name == falinks ||
        Name == dracozolt ||
        Name == arctozolt ||
        Name == dracovish ||
        Name == arctovish ||
        Name == zacian ||
        Name == zamazenta ||
        Name == eternatus ||
        Name == zarude ||
        Name == regieleki ||
        Name == regidrago ||
        Name == glastrier ||
        Name == spectrier ||
        Name == calyrex)
        {
            console.log("Assexue");
            document.getElementById("Assexue").checked = true;
            document.getElementById("SexePoke").style.visibility = none;
            document.getElementById("InfoSexePoke").style.display = none;
            document.getElementById("Male").style.display = none;
            document.getElementById("Femelle").style.display = none;
            document.getElementById("Assexue").style.display = none;
        }
}