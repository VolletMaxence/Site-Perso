/*Retourne la valeur du select selectId*/
function getSelectValue(selectId)
{
    /**On récupère l'élement html <select>*/
    var Zone = document.getElementById(selectId);
    /**
    selectElmt.options correspond au tableau des balises <option> du select
    selectElmt.selectedIndex correspond à l'index du tableau options qui est actuellement sélectionné
    */

    InfoZone = Zone.options[Zone.selectedIndex].value;
    
    getFormulaireEspritZone(InfoZone);
}

//Change de formulaire selon choix
function getFormulaireEspritZone(Zone)
{
    switch (Zone) {
        case 'Ile':
            //Afficher formulaire pour selection esprit
            afficheEmoteIle();
            break;
        case 'Prairie' :
            afficheEmotePrairie();
            break;
        case 'Foret' :
            afficheEmoteForet();
            break;
        case 'Vallee' :
            afficheEmoteVallee();
            break;
        case 'Desert' :
            afficheEmoteDesert();
            break;
        case 'Chambre' :
            afficheEmoteChambre();
            break;
        case 'Eden' :
            afficheEmoteEden();
            break;
    }

}

function afficheEmoteIle()
{
    //Affiche des images des émotes :
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Ile/Base/PointingCandlemaker-1.png';
    var div = document.getElementById("a");
    div.appendChild(myImage);
    //Ajouter une class
    myImage.className += "aIle";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Ile/Base/UsheringStargazer-1.png';
    var div = document.getElementById("b");
    div.appendChild(myImage);
    myImage.className += "bIle";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Ile/Base/RejectingVoyager-1.png';
    var div = document.getElementById("c");
    div.appendChild(myImage);
    myImage.className += "cIle";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Ile/Saison/Mimi-4117_02_sassy_drifter_emote.png';
    var div = document.getElementById("d");
    div.appendChild(myImage);
    myImage.className += "dIle";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Ile/Saison/Mimi-4117_03_piggyback_lightseeker_emote.png';
    var div = document.getElementById("e");
    div.appendChild(myImage);
    myImage.className += "eIle";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Ile/Saison/Belonging_dancing.png';
    var div = document.getElementById("f");
    div.appendChild(myImage);
    myImage.className += "fIle";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Ile/Saison/Emote-curtsy.png';
    var div = document.getElementById("g");
    div.appendChild(myImage);
    myImage.className += "gIle";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Ile/Saison/SoP_deep_breath.png';
    var div = document.getElementById("h");
    div.appendChild(myImage);
    myImage.className += "hIle";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Ile/Saison/SoP_dust_off.png';
    var div = document.getElementById("i");
    div.appendChild(myImage);
    myImage.className += "iIle";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Ile/Saison/SoP_balance.png';
    var div = document.getElementById("j");
    div.appendChild(myImage);
    myImage.className += "jIle";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Ile/Saison/SoP_chest_pound.png';
    var div = document.getElementById("k");
    div.appendChild(myImage);
    myImage.className += "kIle";

    afficheMapEspritIle();
}

//Affiche les émote prsent dans la prairie
function afficheEmotePrairie()
{
    //Affiche des images des émotes :
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Base/ButterflyCharmer-1.png';
    var div = document.getElementById("a");
    div.appendChild(myImage);
    myImage.className += "aPrairie";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Base/ApplaudingBellmaker-1.png';
    var div = document.getElementById("b");
    div.appendChild(myImage);
    myImage.className += "bPrairie";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Base/WavingBellmaker-1.png';
    var div = document.getElementById("c");
    div.appendChild(myImage);
    myImage.className += "cPrairie";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Base/SlumberingShipwright-1.png';
    var div = document.getElementById("d");
    div.appendChild(myImage);
    myImage.className += "dPrairie";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Base/LaughingLightCatcher-1.png';
    var div = document.getElementById("e");
    div.appendChild(myImage);
    myImage.className += "ePrairie";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Base/BirdWhisperer-1.png';
    var div = document.getElementById("f");
    div.appendChild(myImage);
    myImage.className += "fPrairie";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Base/ExhaustedDockWorker-1.png';
    var div = document.getElementById("g");
    div.appendChild(myImage);
    myImage.className += "gPrairie";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Base/CeremonialWorshiper-1.png';
    var div = document.getElementById("h");
    div.appendChild(myImage);
    myImage.className += "hPrairie";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Saison/Mimi-4117_02_stretching_guru_emote.png';
    var div = document.getElementById("i");
    div.appendChild(myImage);
    myImage.className += "iPrairie";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Saison/Mimi-4117_03_doublefive_light_catcher_emote.png';
    var div = document.getElementById("j");
    div.appendChild(myImage);
    myImage.className += "jPrairie";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Saison/Belonging_confetti.png';
    var div = document.getElementById("k");
    div.appendChild(myImage);
    myImage.className += "kPrairie";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Saison/Emote-dance.png';
    var div = document.getElementById("l");
    div.appendChild(myImage);
    myImage.className += "lPrairie";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Saison/SoS_jelly_fish_call.png';
    var div = document.getElementById("m");
    div.appendChild(myImage);
    myImage.className += "mPrairie";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Saison/SoS_shy_stance.png';
    var div = document.getElementById("n");
    div.appendChild(myImage);
    myImage.className += "nPrairie";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Saison/SOS_rally.png';
    var div = document.getElementById("o");
    div.appendChild(myImage);
    myImage.className += "oPrairie";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Saison/SoS_grouch.png';
    var div = document.getElementById("p");
    div.appendChild(myImage);
    myImage.className += "pPrairie";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Saison/SOS_grateful.png';
    var div = document.getElementById("q");
    div.appendChild(myImage);
    myImage.className += "qPrairie";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Saison/SOS_Chill.png';
    var div = document.getElementById("r");
    div.appendChild(myImage);
    myImage.className += "rPrairie";
}

function afficheEmoteForet()
{
    //Affiche des images des émotes :
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Base/ShiveringTrailblazer-1.png';
    var div = document.getElementById("a");
    div.appendChild(myImage);
    myImage.className += "aForet";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Base/BlushingProspector-1.png';
    var div = document.getElementById("b");
    div.appendChild(myImage);
    myImage.className += "bForet";
        
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Base/HideNSeekPioneer-1.png';
    var div = document.getElementById("c");
    div.appendChild(myImage);
    myImage.className += "cForet";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Base/PoutyPorter-1.png';
    var div = document.getElementById("d");
    div.appendChild(myImage);
    myImage.className += "dForet";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Base/DismayedHunter-1.png';
    var div = document.getElementById("e");
    div.appendChild(myImage);
    myImage.className += "eForet";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Base/ApologeticLumberjack-1.png';
    var div = document.getElementById("f");
    div.appendChild(myImage);
    myImage.className += "fForet";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Base/TearfulLightMiner-1.png';
    var div = document.getElementById("g");
    div.appendChild(myImage);
    myImage.className += "gForet";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Base/WhaleWhisperer-1.png';
    var div = document.getElementById("h");
    div.appendChild(myImage);
    myImage.className += "hForet";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Saison/Mimi-4117_02_provoking_performer_emote.png';
    var div = document.getElementById("i");
    div.appendChild(myImage);
    myImage.className += "iForet";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Saison/Mimi-4117_03_laidback_pioneer_emote.png';
    var div = document.getElementById("j");
    div.appendChild(myImage);
    myImage.className += "jForet";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Saison/Hair_tousle.png';
    var div = document.getElementById("k");
    div.appendChild(myImage);
    myImage.className += "kForet";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Saison/Emote-blow_kisses.png';
    var div = document.getElementById("l");
    div.appendChild(myImage);
    myImage.className += "lForet";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Saison/Assembly-Facepalm-emote.png';
    var div = document.getElementById("m");
    div.appendChild(myImage);
    myImage.className += "mForet";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Saison/Assembly-scolding-emote.png';
    var div = document.getElementById("n");
    div.appendChild(myImage);
    myImage.className += "nForet";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Saison/Assembly-Daydream-emote.png';
    var div = document.getElementById("o");
    div.appendChild(myImage);
    myImage.className += "oForet";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Saison/Assembly-Scaredy-emote.png';
    var div = document.getElementById("p");
    div.appendChild(myImage);
    myImage.className += "pForet";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Saison/Assembly-march-emote.png';
    var div = document.getElementById("q");
    div.appendChild(myImage);
    myImage.className += "qForet";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Saison/Assembly-chuckling-emote.png';
    var div = document.getElementById("r");
    div.appendChild(myImage);
    myImage.className += "rForet";
}

function afficheEmoteVallee()
{
    //Affiche des images des émotes :
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Base/ConfidentSightseer-1.png';
    var div = document.getElementById("a");
    div.appendChild(myImage);
    myImage.className += "aVallee";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Base/HandstandingThrillseeker-1.png';
    var div = document.getElementById("b");
    div.appendChild(myImage);
    myImage.className += "bVallee";
        
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Base/MantaWhisperer-1.png';
    var div = document.getElementById("c");
    div.appendChild(myImage);
    myImage.className += "cVallee";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Base/BackflippingChampion-1.png';
    var div = document.getElementById("d");
    div.appendChild(myImage);
    myImage.className += "dVallee";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Base/CheerfulSpectator-1.png';
    var div = document.getElementById("e");
    div.appendChild(myImage);
    myImage.className += "eVallee";
        
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Base/BowingMedalist-1.png';
    var div = document.getElementById("f");
    div.appendChild(myImage);
    myImage.className += "fVallee";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Base/ProudVictor-1.png';
    var div = document.getElementById("g");
    div.appendChild(myImage);
    myImage.className += "gVallee";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Saison/Mimi-4117_02_leaping_dancer_emote.png';
    var div = document.getElementById("h");
    div.appendChild(myImage);
    myImage.className += "hVallee";
        
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Saison/Mimi-4117_03_twirling_champion_emote.png';
    var div = document.getElementById("i");
    div.appendChild(myImage);
    myImage.className += "iVallee";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Saison/Belonging_sparkler.png';
    var div = document.getElementById("j");
    div.appendChild(myImage);
    myImage.className += "jVallee";
        
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Saison/Emote-juggle.png';
    var div = document.getElementById("k");
    div.appendChild(myImage);
    myImage.className += "kVallee";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Saison/Season_of_Dreams_-_Spinning_mentor.png';
    var div = document.getElementById("l");
    div.appendChild(myImage);
    myImage.className += "lVallee";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Saison/Season_of_Dreams_-_Dancing_performer.png';
    var div = document.getElementById("m");
    div.appendChild(myImage);
    myImage.className += "mVallee";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Saison/Season_of_Dreams_-_Peeking_postman.png';
    var div = document.getElementById("n");
    div.appendChild(myImage);
    myImage.className += "nVallee";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Saison/Season_of_Dreams_-_Bearhug_hermit.png';
    var div = document.getElementById("o");
    div.appendChild(myImage);
    myImage.className += "oVallee";
}

function afficheEmoteDesert()
{
    //Affiche des images des émotes :
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Desert/Base/FrightenedRefugee-1.png';
    var div = document.getElementById("a");
    div.appendChild(myImage);
    myImage.className += "aDesert";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Desert/Base/FaintingWarrior-1.png';
    var div = document.getElementById("b");
    div.appendChild(myImage);
    myImage.className += "bDesert";
        
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Desert/Base/CourageousSoldier-1.png';
    var div = document.getElementById("c");
    div.appendChild(myImage);
    myImage.className += "cDesert";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Desert/Base/StealthySurvivor-1.png';
    var div = document.getElementById("d");
    div.appendChild(myImage);
    myImage.className += "dDesert";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Desert/Base/SalutingCaptain-1.png';
    var div = document.getElementById("e");
    div.appendChild(myImage);
    myImage.className += "eDesert";
        
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Desert/Base/LookoutScout-1.png';
    var div = document.getElementById("f");
    div.appendChild(myImage);
    myImage.className += "fDesert";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Desert/Saison/Mimi-4117_02_saluting_protector_emote.png';
    var div = document.getElementById("g");
    div.appendChild(myImage);
    myImage.className += "gDesert";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Desert/Saison/Mimi-4117_03_crab_whisperer_emote.png';
    var div = document.getElementById("h");
    div.appendChild(myImage);
    myImage.className += "hDesert";
        
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Desert/Saison/Belonging_crawl.png';
    var div = document.getElementById("i");
    div.appendChild(myImage);
    myImage.className += "iDesert";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Desert/Saison/Emote-respect.png';
    var div = document.getElementById("j");
    div.appendChild(myImage);
    myImage.className += "jDesert";
        
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Desert/Saison/Head_nod_white_on_black.png';
    var div = document.getElementById("k");
    div.appendChild(myImage);
    myImage.className += "kDesert";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Desert/Saison/Shrug_white_on_black.png';
    var div = document.getElementById("l");
    div.appendChild(myImage);
    myImage.className += "lDesert";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Desert/Saison/Crab_walk_white_on_black.png';
    var div = document.getElementById("m");
    div.appendChild(myImage);
    myImage.className += "mDesert";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Desert/Saison/Boo_white_on_black.png';
    var div = document.getElementById("n");
    div.appendChild(myImage);
    myImage.className += "nDesert";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Desert/Saison/Fall_asleep_white_on_black.png';
    var div = document.getElementById("o");
    div.appendChild(myImage);
    myImage.className += "oDesert";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Desert/Saison/Play_fight_lvl_2_white_on_black.png';
    var div = document.getElementById("p");
    div.appendChild(myImage);
    myImage.className += "pDesert";
}

function afficheEmoteChambre()
{
    //Affiche des images des émotes :
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Chambre/Base/PrayingAcolyte-1.png';
    var div = document.getElementById("a");
    div.appendChild(myImage);
    myImage.className += "aChambre";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Chambre/Base/LevitatingAdept-1.png';
    var div = document.getElementById("b");
    div.appendChild(myImage);
    myImage.className += "bChambre";
        
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Chambre/Base/PoliteScholar-1.png';
    var div = document.getElementById("c");
    div.appendChild(myImage);
    myImage.className += "cChambre";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Chambre/Base/MemoryWhisperer-1.png';
    var div = document.getElementById("d");
    div.appendChild(myImage);
    myImage.className += "dChambre";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Chambre/Base/Meditating-Monastic-1.png';
    var div = document.getElementById("e");
    div.appendChild(myImage);
    myImage.className += "eChambre";
        
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Chambre/Saison/Mimi-4117_02_greeting_shaman_emote.png';
    var div = document.getElementById("f");
    div.appendChild(myImage);
    myImage.className += "fChambre";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Chambre/Saison/Mimi-4117_03_shushing_light_scholar_emote.png';
    var div = document.getElementById("g");
    div.appendChild(myImage);
    myImage.className += "gChambre";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Chambre/Saison/Belonging_stance_think.png';
    var div = document.getElementById("h");
    div.appendChild(myImage);
    myImage.className += "hChambre";
        
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Chambre/Saison/Emote-thinking.png';
    var div = document.getElementById("i");
    div.appendChild(myImage);
    myImage.className += "iChambre";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Chambre/Saison/SOTLP-Beckoning-Ruler.png';
    var div = document.getElementById("j");
    div.appendChild(myImage);
    myImage.className += "jChambre";
        
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Chambre/Saison/SOTLP-Gloating-Narcissist.png';
    var div = document.getElementById("k");
    div.appendChild(myImage);
    myImage.className += "kChambre";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Chambre/Saison/SOTLP-Stretching-Lamplighter.png';
    var div = document.getElementById("l");
    div.appendChild(myImage);
    myImage.className += "lChambre";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Chambre/Saison/SOTLP-Slouching-Soldier.png';
    var div = document.getElementById("m");
    div.appendChild(myImage);
    myImage.className += "mChambre";
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Chambre/Saison/SOTLP-Sneezing-Geographer.png';
    var div = document.getElementById("n");
    div.appendChild(myImage);
    myImage.className += "nChambre";

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Chambre/Saison/SOTLP-Star-Collector.png';
    var div = document.getElementById("o");
    div.appendChild(myImage);
    myImage.className += "oChambre";
}

function afficheEmoteEden()
{

}

function supprTouteImage()
{
    var el = document.getElementById('a');
    el.parentNode.removeChild(el);

    var el = document.getElementById('b');
    el.parentNode.removeChild(el);

    var el = document.getElementById('c');
    el.parentNode.removeChild(el);

    var el = document.getElementById('d');
    el.parentNode.removeChild(el);

    var el = document.getElementById('e');
    el.parentNode.removeChild(el);

    var el = document.getElementById('f');
    el.parentNode.removeChild(el);

    var el = document.getElementById('g');
    el.parentNode.removeChild(el);

    var el = document.getElementById('h');
    el.parentNode.removeChild(el);

    var el = document.getElementById('i');
    el.parentNode.removeChild(el);

    var el = document.getElementById('j');
    el.parentNode.removeChild(el);

    var el = document.getElementById('k');
    el.parentNode.removeChild(el);

    var el = document.getElementById('l');
    el.parentNode.removeChild(el);

    var el = document.getElementById('m');
    el.parentNode.removeChild(el);

    var el = document.getElementById('n');
    el.parentNode.removeChild(el);

    var el = document.getElementById('o');
    el.parentNode.removeChild(el);

    var el = document.getElementById('p');
    el.parentNode.removeChild(el);

    var el = document.getElementById('q');
    el.parentNode.removeChild(el);

    var el = document.getElementById('r');
    el.parentNode.removeChild(el);

    var el = document.getElementById('s');
    el.parentNode.removeChild(el);

    var el = document.getElementById('t');
    el.parentNode.removeChild(el);

    var el = document.getElementById('u');
    el.parentNode.removeChild(el);

    var el = document.getElementById('v');
    el.parentNode.removeChild(el);

    var el = document.getElementById('w');
    el.parentNode.removeChild(el);

    var el = document.getElementById('x');
    el.parentNode.removeChild(el);

    var el = document.getElementById('y');
    el.parentNode.removeChild(el);

    var el = document.getElementById('z');
    el.parentNode.removeChild(el);
}

function afficheMapEspritIle()
{
    document.querySelector( ".aIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".bIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".cIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".dIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".eIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".fIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".gIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".hIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".iIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".jIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".kIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".lIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".mIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".nIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".oIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".pIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".qIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".rIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".sIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".tIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".uIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".vIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".wIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".xIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".yIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".zIle" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })
        //Afficher map avec uniquement CET esprit 
}

function afficheMapEspritPrairie()
{
    document.querySelector( ".aPrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        console.log("bujifeubeif");

    })

    document.querySelector( ".bPrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".cPrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".dPrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".ePrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".fPrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".gPrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".hPrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".iPrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".jPrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".kPrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".lPrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".mPrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".nPrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".oPrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".pPrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".qPrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".rPrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".sPrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".tPrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".uPrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".vPrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".wPrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".xPrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".yPrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".zPrairie" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })
        //Afficher map avec uniquement CET esprit 
}

function afficheMapEspritForet()
{
    document.querySelector( ".aForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
        
    })

    document.querySelector( ".bForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".cForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".dForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".eForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".fForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".gForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".hForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".iForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".jForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".kForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".lForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".mForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".nForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".oForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".pForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".qForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".rForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".sForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".tForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".uForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".vForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".wForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".xForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".yForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".zForet" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })
        //Afficher map avec uniquement CET esprit 
}

function afficheMapEspritVallee()
{
    document.querySelector( ".aVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
        
    })

    document.querySelector( ".bVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".cVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".dVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".eVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".fVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".gVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".hVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".iVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".jVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".kVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".lVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".mVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".nVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".oVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".pVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".qVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".rVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".sVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".tVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".uVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".vVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".wVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".xVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".yVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".zVallee" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })
        //Afficher map avec uniquement CET esprit 
}

function afficheMapEspritDesert()
{
    document.querySelector( ".aDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
        
    })

    document.querySelector( ".bDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".cDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".dDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".eDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".fDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".gDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".hDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".iDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".jDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".kDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".lDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".mDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".nDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".oDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".pDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".qDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".rDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".sDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".tDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".uDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".vDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".wDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".xDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".yDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".zDesert" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })
        //Afficher map avec uniquement CET esprit 
}

function afficheMapEspritChambre()
{
    document.querySelector( ".aChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
        
    })

    document.querySelector( ".bChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".cChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".dChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".eChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".fChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".gChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".hChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".iChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".jChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".kChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".lChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".mChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".nChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".oChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".pChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".qChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".rChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".sChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".tChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".uChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".vChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".wChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".xChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".yChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })

    document.querySelector( ".zChambre" ).addEventListener( "click", function () 
    {
        supprTouteImage();
        
    })
        //Afficher map avec uniquement CET esprit 
}