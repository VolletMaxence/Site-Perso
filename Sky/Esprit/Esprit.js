/**Retourne la valeur du select selectId*/
function getSelectValue(selectId)
{
    /**On récupère l'élement html <select>*/
    var Zone = document.getElementById(selectId);
    /**
    selectElmt.options correspond au tableau des balises <option> du select
    selectElmt.selectedIndex correspond à l'index du tableau options qui est actuellement sélectionné
    */


    InfoZone = Zone.options[Zone.selectedIndex].value;
    
    alert(InfoZone);

    getFormulaireEspritZone(InfoZone);
}

//Change de formulaire selon choix
function getFormulaireEspritZone(Zone)
{
    switch (Zone) {
        case 'Ile':
            //Afficher formulaire pour selection esprit
            
            break;
        case 'Prairie' :

            break;
        case 'Foret' :

            break;
        case 'Vallee' :

            break;
        case 'Desert' :

            break;
        case 'Chambre' :

            break;
        case 'Eden' :

            break;
    }

}

