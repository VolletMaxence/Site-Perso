<html lang="fr">
    <head>
        <!--Icone : -->
        <link rel="icon" href="../Icone/Shellos-Icone.ico">
        <script src="../JQuery.js" type="text/javascript"></script>
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <title> Site d'un bon Gros Chien </title>
    </head>
    <body>
        <?php
            include '../Menu/Menu.php';
            require "../Session/BDD.php";
        ?>
        <form method="post" id="">
            <input name="Retour" type=submit class="btn btn-default" value="Retour page d'acceuil">
            </form>

            <?php
            if(isset($_POST['Retour']))
            {
                ?>
                <meta http-equiv="Refresh" content="0; URL=../Manga">
                <?php
            }
        ?>
        </form>
        <?php
        //Obtenir tout les livres en base
            $stmt = $_SQL->query("SELECT mangaUtilisateur.`ID`, manga.`Nom` FROM `mangaUtilisateur` , `manga` WHERE mangaUtilisateur.`ID_Utilisateur`= ".$_SESSION['IDusername']." AND manga.ID = mangaUtilisateur.ID_Manga ORDER BY `Nom`");
            ?>
            <form method="POST" id="AjoutLivreListe">
                <select id="ListeLivre" name="ListeLivre" class="">
                    <option value=''> Liste des livres </option>
                    <?php
                    While($getLivre = $stmt->fetch())
                    {
                        ?>
                        <option value='<?= $getLivre["ID"] ?>'> <?= $getLivre['Nom'] ?> </option>
                        <?php
                    }
                ?>
                </select>
            </form>
            
            <form method="post" id="nbrTomeForm" required style="visibility: hidden;">
                <div>
                    <label for="nbrTomeParu"> Nombre de tomes : </label>
                    <input type="number" id="nbrTome" name="nbrTome" required style="visibility: hidden;">
                </div>
            </form>
                <div>
                    <input id="nbrTomeSubmit" name="EnvoieDansBase" type=button onclick="UpdateListe( <?= $_SESSION['IDusername'] ?>)" class="btn btn-default" value="Ajout du livre en base" required style="visibility: hidden;">
                </div>
    </body>
        <script src="Fonction/Update.js"></script>
        <script type='text/javascript'>
            document.getElementById('ListeLivre').onchange = function() 
            {
                var index = this.selectedIndex;
                var Serie = this.children[index].innerHTML.trim();

                console.log(Serie);

                document.getElementById('nbrTomeForm').style.visibility = "visible";
                document.getElementById('nbrTome').style.visibility = "visible";
                document.getElementById('nbrTomeSubmit').style.visibility = "visible";

            }

            document.getElementById('nbrTome').onchange = function() 
            {
                let nbrTome = this.value;

                var e = document.getElementById("ListeLivre");
                var NomLivre = e.value;

                console.log(nbrTome);
            }

        </script>
</html>