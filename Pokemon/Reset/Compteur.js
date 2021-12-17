function Shasser($ID)
{
    fetch("Redirection.php", {
        method : "POST",
        body: JSON.stringify({
            ID: $ID
        }),
    }).then (res => 
    {
        //Redirection
        console.log("pute");
    }).catch (err => console.error (err));
}

function plusUn()
{
    fetch( "Compteur.php" ).then( res => {

        let currentValue = document.getElementById( "Nombre" ).innerHTML;

        console.log( currentValue );
        currentValue = parseInt( currentValue );
        currentValue++
        document.getElementById( "Nombre" ).innerHTML = currentValue;

    }).catch( err => console.error( err ) );

}