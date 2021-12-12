function Shasser($ID)
{
    fetch("Redirection.php").then (res => 
    {
        //Redirection
        document.location.replace('../../Pokemon/Reset/Shasse.php');
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