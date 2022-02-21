<?php
function AfficheInfoManga($ID, $ID_Utilisateur, $ID_Manga, $nbrTomePosseder)
{
    require "../Session/BDD.php";

    console_log("AfficheInfoManga");

    $stmt = $_SQL->prepare("SELECT * FROM `manga` WHERE `ID` = ?");
    $stmt->execute(array($ID_Manga));
    $Manga = $stmt->fetch();
?>
    <div class="text-center">
    <?php
        echo $Manga['Nom'];
    ?>
    </div>
    <div class="text-center">
    <?php
        echo $nbrTomePosseder." / ".$Manga['nbrTome'];
    ?>
    </div>
    <div class="text-center">
        <?php
        if($Manga['Fini'] == 1)
        {
            echo "Série fini !";
        }else 
        {
            echo "Série en cour de parution.";
        }
        ?>
    </div>
    <hr style="margin: auto;" width="41%">
<?php
}

?>