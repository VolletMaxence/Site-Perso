function Update(IDUtilisateur)
{
    ListeLivre = document.getElementById('ListeLivre')
    var IDManga = ListeLivre.selectedIndex;

    console.log(IDManga);


    let nbrTome = document.getElementById('nbrTome').value;
    console.log(nbrTome);


    $.ajax({
        url : 'Fonction/Update.php',
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

function UpdateBDD(IDUtilisateur)
{
    let ListeLivre = document.getElementById('ListeLivre');
    var IDManga = ListeLivre.selectedIndex;
    console.log(IDManga);

    let nbrTome = document.getElementById('nbrTome').value;
    console.log(nbrTome);

    let Fini = document.getElementById('Fini').checked;
    if(Fini == true)
    {
        var FiniValeur = 1;
    } else
    {
        var FiniValeur = 0;
    }
    console.log(FiniValeur);

    $.ajax({
        url : 'Fonction/UpdateBDD.php',
        type : 'POST',
        data : { IDUtilisateur: IDUtilisateur, IDManga: IDManga, nbrTome: nbrTome, Fini: FiniValeur},

        success : function(code_html, statut)
        {

        },
        error : function(code_html, statut)
        {
            alert("Erreur");
        },
    })
}

function UpdateListe(IDUtilisateur)
{
    let ListeLivre = document.getElementById('ListeLivre');
    var IDManga = ListeLivre.selectedIndex;
    console.log(IDManga);

    let nbrTome = document.getElementById('nbrTome').value;
    console.log(nbrTome);

    $.ajax({
        url : 'Fonction/UpdateListe.php',
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