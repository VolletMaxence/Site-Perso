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