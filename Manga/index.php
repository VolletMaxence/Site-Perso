<html>
    <head>
        <!--Icone : -->
        <link rel="icon" href="../Icone/Shellos-Icone.ico">
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <title> Site d'un bon Gros Chien - Manga</title>
    </head>
    <body>
        <?php
            include '../Menu/Menu.php'; // Hello Gros Chien //
            include 'manga.php';
            require "../Session/BDD.php";
        ?>

        <!-- Doit se connecter pour avoir acces a la liste livre / manga, système de notif pour admin, ajout série livre doit être accepter par admin -->
        <!-- besoin de session -->
        <?php
        if($_SESSION && $_SESSION['Connect'] == true)
        { 
            // lien vers page "ma liste de série"
            $ID = $_SESSION['IDusername'];
            console_log("ID : ".$ID);

            //Bouton redirection pour ajouter Manga dans sa liste
            if($_SESSION['Admin'] == 1 || $_SESSION['Admin'] == 2)
            {
            ?>
                <div class="position end-0">
                    <form method="post" id="">
                        <input name="AjoutLibreBDD" type=submit class="btn btn-outline-warning" value="Ajouter Livre à la Base">
                    </form>
                </div>
                <div class="position top-0 end-0">
                    <form method="post" id="">
                        <input name="UpdateLibreBDD" type=submit class="btn btn-outline-warning" value="Modifier livre dans la Base">
                    </form>
                </div>
                <?php
                if(isset($_POST['AjoutLibreBDD']))
                {
                    ?>
                    <meta http-equiv="Refresh" content="0; URL=AjoutLivreBDD.php">
                    <?php
                }
                if(isset($_POST['UpdateLibreBDD']))
                {
                    ?>
                    <meta http-equiv="Refresh" content="0; URL=UpdateLivreBDD.php">
                    <?php
                }
            }
            ?>
            <div class="text-left">
                <form method="post" id="">
                    <input name="AjoutLivreListe" type=submit class="btn btn-outline-primary" value="Ajouter Livre à sa liste">
                </form>
            </div>
            <div class="text-left">
                <form method="post" id="">
                    <input name="UpdateLivreListe" type=submit class="btn btn-outline-primary" value="Modifier livre de sa liste">
                </form>
            </div>
            <?php
            if(isset($_POST['UpdateLivreListe']))
            {
                ?>
                <meta http-equiv="Refresh" content="0; URL=UpdateLivreListe.php">
                <?php
            }
            if(isset($_POST['AjoutLivreListe']))
            {
                ?>
                <meta http-equiv="Refresh" content="0; URL=AjoutLivreListe.php">
                <?php
            }

            //Bouton redirection pour ajouter Manga dans BDD

            //Récuperer le manga depuis table MangaUtilisatuer
            $stmt = $_SQL->prepare("SELECT mangaUtilisateur.`ID`, mangaUtilisateur.`ID_Utilisateur`, mangaUtilisateur.`ID_Manga`, mangaUtilisateur.`nbrTomePosseder` FROM `mangaUtilisateur` WHERE `ID_Utilisateur` = ? ORDER BY nomManga");
            $stmt->execute(array($ID));
            while($Manga = $stmt->fetch())
            {
                //Affiche une fiche pour chaque poké
                AfficheInfoManga($Manga['ID'], $Manga['ID_Utilisateur'], $Manga['ID_Manga'], $Manga['nbrTomePosseder']);
                //$i++;
            }
        
        } else 
        {
            include '../Session/session.php';
        }
        ?>
    </body>
</html>

<?php
function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}
?>