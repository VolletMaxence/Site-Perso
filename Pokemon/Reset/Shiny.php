<?php
function AfficheInfoShiny($Nom, $Rencontre, $Version, $Sexe, $Reset, $Fini)
{
    //Créer une fiche pour montrer le poké
    ?>
    <div class="">
        <?php
        echo $Version;
        echo $Nom;

        if($Fini == 1)
        {
            echo $Sexe;
            echo $Rencontre;
        } else 
        {
            ?>
            <button name="button" class="btn btn-default" onclick=""> Reprendre la chasse (bon courage) </button>
            
            <?php
            $_SESSION['Shasse'] = $Nom;

            //Quand on appuis sur le boutton, on ajoute 1

        }
    ?>
    </div>
    <?php
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