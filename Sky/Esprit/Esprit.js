/**Retourne la valeur du select selectId*/
function getSelectValue(selectId)
{
    /**On récupère l'élement html <select>*/
    var selectElmt = document.getElementById(selectId);
    /**
    selectElmt.options correspond au tableau des balises <option> du select
    selectElmt.selectedIndex correspond à l'index du tableau options qui est actuellement sélectionné
    */


    switch (selectElmt) {
        case 'Ile':
            
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
    return selectElmt.options[selectElmt.selectedIndex].value;

}

//Change de formulaire selon choix
function getFormulaireEspritZone(Zone)
{
    
}