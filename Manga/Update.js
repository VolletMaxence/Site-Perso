function Update(IDUtilisateur)
{
    ListeLivre = document.getElementById('ListeLivre')
    var IDManga = ListeLivre.selectedIndex;

    console.log(IDManga);


    let nbrTome = document.getElementById('nbrTome').value;
    console.log(nbrTome);


    $.ajax({
        url : 'Update.php',
        type : 'POST',
        data : { IDUtilisateur: IDUtilisateur, IDManga: IDManga, nbrTome: nbrTome},

        success : function(code_html, statut)
        {

        },
        error : function(code_html, statut)
        {
            alert("Erreur");
        },
    })
}