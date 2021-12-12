<?php
function AfficheInfoShiny($Nom, $Rencontre, $Version, $Sexe, $Reset, $Fini, $IDPoke, $i)
{
    //Créer une fiche pour montrer le poké
    ?>
    <div class="">
        <img class="fit-picture" src="">
        <?php
        echo $Version;
        echo $Nom;
        $IDPoke[$i] = $IDPoke;

        if($Fini == 1)
        {
            echo $Sexe;
            echo $Rencontre;
        } else 
        {
            //onclick : Redirection avec ID du poké stocké pour l'utiliser dans l autre page.
            $IDP = $IDPoke[$i]; 
            ?>
            <form onsubmit="return false">
                <button name="button" type=submit class="btn btn-default" onclick="Shasser($IDP)"> Reprendre la chasse (bon courage) </button>
            </form>

            <?php
            $_SESSION['Shasse'] = $Nom;
            
        }
        
    ?>
    </div>
    <?php
}

function Shasser($IDPokemon)
{
    echo $IDPokemon;
    $_SESSION['IDPoke'] = $IDPokemon;
    console_log($_SESSION['IDPoke']);
    //Redirection
    //echo "<script type='text/javascript'>document.location.replace('../../Pokemon/Reset/Shasse.php');</script>";
}

function Retour()
{
    echo "<script type='text/javascript'>document.location.replace('../../Pokemon/Reset');</script>";
}

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }
