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
function Fin(Poke)
{
    $.ajax({
        url : 'Fonction/Fin.php',
        type : 'POST',
        data : { ID: Poke},

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