<?php
function AfficheInfoShiny($Nom, $Rencontre, $Version, $Sexe, $Reset, $Fini, $IDPoke, $i, $Lien)
{
    //Créer une fiche pour montrer le poké
    ?>
    <div class="">
        <img class="fit-picture" src="">
            <div class="text-center">
                <?php
                echo $Version."\n";
                ?>
            </div>
            <?php
        //echo $Nom."\n";
        if($Reset != 0)
        {
            ?>
            <div class="text-center">
                <?php
                echo $Reset."\n";
                ?>
            </div>
            <?php
        } else if ($Reset == 0 && $Fini != 1)
        {
            ?>
            <div class="text-center">
                <?php
                echo "Vous n'avez pas encore rencontré ce pokémon.";
                ?>
            </div>
            <?php
        } else if ($Reset == 0 && $Fini == 1)
        {
            ?>
            <div class="text-center">
                <?php
                echo "Accident.";
                ?>
            </div>
            <?php
        }

        if($Fini == 1)
        {
            ?>
            <div class="text-center">
                <?php
                    echo $Sexe."\n";
                ?>
            <div class="text-center">
                <?php
                    echo $Rencontre."\n";
                ?>
                <div class="text-center">
                    <img class="" src= <?= $Lien ?> alt="Image de votre Shiny">
                </div>
                <div class="text-center">
                    <hr style="margin: auto;" width="41%">
                </div>
            <?php
        } else 
        {
            ?>
                <div class="text-center">
                    <img class="" src= <?= $Lien ?> alt="Image de votre Shiny">
                </div>
            <?php
            
            //onclick : Redirection avec ID du poké stocké pour l'utiliser dans l autre page.
            $IDP = $IDPoke;
            console_log("IDPoke function Shiny.php : ".$IDPoke." pour ".$Nom);
            ?>
            <form method="post" id="">
                <!-- value censer s'envoyer au serveur mais pas afficher sur page -->
                <input type="hidden" name="random" value="<?= $IDPoke ?>">
                <input name="IDPoke" type=submit class="btn btn-default" value="Reprendre la chasse (bon courage)">
            </form>
            <div class="text-center">
                <hr style="margin: auto;" width="41%">
            </div>
            <?php 
            if(isset($_POST['IDPoke']))
            {
                console_log('Appuis sur bouton : '.$IDPoke.' . ');
                console_log($_POST['random']);
                $IDP = $_POST['random'];
                console_log($IDP);
                $_SESSION['IDPoke'] = $IDP;
                ?>
                <meta http-equiv="Refresh" content="0; URL=Shasse.php">
                <?php
            }
        }
    ?>
    </div>
    <?php
}

function Retour()
{
    //echo "<script type='text/javascript'>document.location.replace('../../Pokemon/Reset');</script>";
}

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}

//send help
function list2G()
{
    ?>
        
    <?php
}

function list3G()
{
    ?>
    <select name="Jeu">

    </select>
    <?php
}

function list4G()
{
    ?>
    <select name="Jeu">

    </select>
    <?php
}

function list5G()
{
    ?>
    <select name="Jeu">

    </select>
    <?php
}

function list6G()
{
    ?>
    <select name="Jeu">

    </select>
    <?php
}

function list7G()
{
    ?>
    <select name="Jeu">

    </select>
    <?php
}

function listLetsGo()
{
    ?>
    <select name="Jeu">

    </select>
    <?php
}

function list8G()
{
    ?>
    <select name="Jeu">

    </select>
    <?php
}