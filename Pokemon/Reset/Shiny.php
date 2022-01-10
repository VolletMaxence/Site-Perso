<?php
function AfficheInfoShiny($Nom, $Rencontre, $Version, $Sexe, $Reset, $Fini, $IDPoke, $i, $Lien)
{
    //Créer une fiche pour montrer le poké
    ?>
    <div class="">
        <img class="fit-picture" src="">
        <?php
        echo $Version."\n";
        echo $Nom."\n";
        if($Reset != 0)
        {
            echo $Reset."\n";
        }

        if($Fini == 1)
        {
            echo $Sexe."\n";
            echo $Rencontre."\n";
            ?>
                <img class="" src= <?= $Lien ?> alt="Image de votre Shiny">
            <?php
        } else 
        {
            ?>
                <img class="" src= <?= $Lien ?> alt="Image de votre Shiny">
            <?php
            
            //onclick : Redirection avec ID du poké stocké pour l'utiliser dans l autre page.
            $IDP = $IDPoke;
            console_log("IDPoke function Shiny.php : ".$IDPoke." pour ".$Nom);
            ?>
            <form method="post" id="">
                <!-- value censer s'envoyer au serveur mais pas afficher sur page -->
                <input type="hidden" name="random" value="<?= $i ?>">
                <input name="IDPoke" type=submit class="btn btn-default" value="Reprendre la chasse (bon courage)">
            </form>
            <?php 
            if(isset($_POST['IDPoke']))
            {
                console_log('Appuis sur bouton : '.$IDPoke.' . ');
                console_log($_POST['random']);
                $IDP = $_POST['random'];
                console_log($IDP);
                $_SESSION['IDPoke'] = $IDP;
                ?>
                <meta http-equiv="Refresh" content="1; URL=Shasse.php">
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