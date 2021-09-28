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

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Ile/Base/UsheringStargazer-1.png';
    var div = document.getElementById("b");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Ile/Base/RejectingVoyager-1.png';
    var div = document.getElementById("c");
    div.appendChild(myImage);

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Ile/Saison/Mimi-4117_02_sassy_drifter_emote.png';
    var div = document.getElementById("d");
    div.appendChild(myImage);

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Ile/Saison/Mimi-4117_03_piggyback_lightseeker_emote.png';
    var div = document.getElementById("e");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Ile/Saison/Belonging_dancing.png';
    var div = document.getElementById("f");
    div.appendChild(myImage);

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Ile/Saison/Emote-curtsy.png';
    var div = document.getElementById("g");
    div.appendChild(myImage);

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Ile/Saison/SoP_deep_breath.png';
    var div = document.getElementById("h");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Ile/Saison/SoP_dust_off.png';
    var div = document.getElementById("i");
    div.appendChild(myImage);

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Ile/Saison/SoP_balance.png';
    var div = document.getElementById("j");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Ile/Saison/SoP_chest_pound.png';
    var div = document.getElementById("k");
    div.appendChild(myImage);
}

//Affiche les émote prsent dans la prairie
function afficheEmotePrairie()
{
    //Affiche des images des émotes :
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Base/ButterflyCharmer-1.png';
    var div = document.getElementById("a");
    div.appendChild(myImage);

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Base/ApplaudingBellmaker-1.png';
    var div = document.getElementById("b");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Base/WavingBellmaker-1.png';
    var div = document.getElementById("c");
    div.appendChild(myImage);

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Base/SlumberingShipwright-1.png';
    var div = document.getElementById("d");
    div.appendChild(myImage);

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Base/LaughingLightCatcher-1.png';
    var div = document.getElementById("e");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Base/BirdWhisperer-1.png';
    var div = document.getElementById("f");
    div.appendChild(myImage);

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Base/ExhaustedDockWorker-1.png';
    var div = document.getElementById("g");
    div.appendChild(myImage);

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Base/CeremonialWorshiper-1.png';
    var div = document.getElementById("h");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Saison/Mimi-4117_02_stretching_guru_emote.png';
    var div = document.getElementById("i");
    div.appendChild(myImage);

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Saison/Mimi-4117_03_doublefive_light_catcher_emote.png';
    var div = document.getElementById("j");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Saison/Belonging_confetti.png';
    var div = document.getElementById("k");
    div.appendChild(myImage);

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Saison/Emote-dance.png';
    var div = document.getElementById("l");
    div.appendChild(myImage);

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Saison/SoS_jelly_fish_call.png';
    var div = document.getElementById("m");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Saison/SoS_shy_stance.png';
    var div = document.getElementById("n");
    div.appendChild(myImage);

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Saison/SOS_rally.png';
    var div = document.getElementById("o");
    div.appendChild(myImage);

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Saison/SoS_grouch.png';
    var div = document.getElementById("p");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Saison/SOS_grateful.png';
    var div = document.getElementById("q");
    div.appendChild(myImage);

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Prairie/Saison/SOS_Chill.png';
    var div = document.getElementById("r");
    div.appendChild(myImage);
}

function afficheEmoteForet()
{
    //Affiche des images des émotes :
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Base/ShiveringTrailblazer-1.png';
    var div = document.getElementById("a");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Base/BlushingProspector-1.png';
    var div = document.getElementById("b");
    div.appendChild(myImage);
        
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Base/HideNSeekPioneer-1.png';
    var div = document.getElementById("c");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Base/PoutyPorter-1.png';
    var div = document.getElementById("d");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Base/DismayedHunter-1.png';
    var div = document.getElementById("e");
    div.appendChild(myImage);
        
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Base/ApologeticLumberjack-1.png';
    var div = document.getElementById("f");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Base/TearfulLightMiner-1.png';
    var div = document.getElementById("g");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Base/WhaleWhisperer-1.png';
    var div = document.getElementById("h");
    div.appendChild(myImage);
        
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Saison/Mimi-4117_02_provoking_performer_emote';
    var div = document.getElementById("i");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Saison/Mimi-4117_03_laidback_pioneer_emote.png';
    var div = document.getElementById("j");
    div.appendChild(myImage);
        
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Saison/Hair_tousle.png';
    var div = document.getElementById("k");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Saison/Emote-blow_kisses.png';
    var div = document.getElementById("l");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Saison/Assembly-Facepalm-emote.png';
    var div = document.getElementById("m");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Saison/Assembly-scolding-emote.png';
    var div = document.getElementById("n");
    div.appendChild(myImage);

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Saison/Assembly-Daydream-emote.png';
    var div = document.getElementById("o");
    div.appendChild(myImage);

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Saison/Assembly-Scaredy-emote.png';
    var div = document.getElementById("p");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Saison/Assembly-march-emote.png';
    var div = document.getElementById("q");
    div.appendChild(myImage);

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Foret/Saison/Assembly-chuckling-emote.png';
    var div = document.getElementById("r");
    div.appendChild(myImage);
}

function afficheEmoteVallee()
{
    //Affiche des images des émotes :
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Base/ConfidentSightseer-1.png';
    var div = document.getElementById("a");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Base/HandstandingThrillseeker-1.png';
    var div = document.getElementById("b");
    div.appendChild(myImage);
        
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Base/MantaWhisperer-1.png';
    var div = document.getElementById("c");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Base/BackflippingChampion-1.png';
    var div = document.getElementById("d");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Base/CheerfulSpectator-1.png';
    var div = document.getElementById("e");
    div.appendChild(myImage);
        
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Base/BowingMedalist-1.png';
    var div = document.getElementById("f");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Base/ProudVictor-1.png';
    var div = document.getElementById("g");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Saison/Mimi-4117_02_leaping_dancer_emote.png';
    var div = document.getElementById("h");
    div.appendChild(myImage);
        
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Saison/Mimi-4117_03_twirling_champion_emote';
    var div = document.getElementById("i");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Saison/Belonging_sparkler.png';
    var div = document.getElementById("j");
    div.appendChild(myImage);
        
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Saison/Emote-juggle.png';
    var div = document.getElementById("k");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Saison/Season_of_Dreams_-_Spinning_mentor.png';
    var div = document.getElementById("l");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Saison/Season_of_Dreams_-_Dancing_performer.png';
    var div = document.getElementById("m");
    div.appendChild(myImage);
    
    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Saison/Season_of_Dreams_-_Peeking_postman.png';
    var div = document.getElementById("n");
    div.appendChild(myImage);

    var myImage = new Image(191, 191);
    myImage.src = 'Image/Vallee/Saison/Season_of_Dreams_-_Bearhug_hermit.png';
    var div = document.getElementById("o");
    div.appendChild(myImage);
}

function afficheEmoteDesert()
{

}

function afficheEmoteChambre()
{

}

function afficheEmoteEden()
{

}

document.getElementById( "a" ).addEventListener( "click", function () 
{

    console.log("t'as clicked sur mon fiak de pute ");
    //Afficher map avec uniquement CET esprit

});