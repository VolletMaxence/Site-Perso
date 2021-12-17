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
            $IDP = $IDPoke;
            console_log("IDPoke function Shiny.php : ".$IDPoke);
            ?>
            <form method="post">
                <input id="IDPoke" name="IDPoke" type=submit class="btn btn-default" value="Reprendre la chasse (bon courage)">
            </form>
            <?php 
            if(isset($_POST['IDPoke']))
            {
                console_log('Appuis sur bouton : '.$IDPoke);

                $_SESSION['IDPoke'] = $IDP;
                ?>
                <meta http-equiv="Refresh" content="10; URL=Shasse.php">
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
        <select name="Jeu">
            
        </select>
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