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