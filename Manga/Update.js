function Update(IDManga, IDUtilisateur, nbrTome, nbrTomeMax)
{

    console.log(IDManga);
    console.log(IDUtilisateur);
    console.log(nbrTome);
    console.log(nbrTomeMax);

    $.ajax({
        url : 'Update.php',
        type : 'POST',
        data : { IDManga: IDManga, IDUtilisateur: IDUtilisateur, nbrTome: nbrTome, nbrTomeMax: nbrTomeMax},

        success : function(code_html, statut)
        {

        },
        error : function(code_html, statut)
        {
            alert("Erreur");
        },
    })
}