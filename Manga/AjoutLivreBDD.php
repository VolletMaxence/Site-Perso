<html>
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

        <form method="post" id="AjoutLibreBDD">
            <!-- Ajout Titre / nbr Tome / fini ou non /  -->
            <!-- Nom / nbrTome Paru / Type (Manga, BD, Roman, .....), Fini-->
            <div>
            <label for="Nom"> Titre : </label>
            <input type="text" id="Nom" name="Nom" required >
            </div>

            <div>
            <label for="nbrTomeParu"> Nombre de tomes paru : </label>
            <input type="number" id="nbrTomeParu" name="nbrTomeParu" required >
            </div>

            <div>
            <label for="TypeLivre"> Type de livre : </label>
            <select id="TypeLivre" name="TypeLivre" class="position-absolute">
                <option value=""> Sélectionner le type de série </option>
                <option value="Manga"> Manga </option>
                <option value="BD"> Bande Dessiné </option>
                <option value="Roman"> Roman </option>
            </select>
            </div>

            <div>
            <label for="Fini"> Série Fini ? </label>
            <input type="checkbox" id="Fini" name="Fini" value="1">
            </div>

            <div>
                <input name="EnvoieDansBase" type=submit class="btn btn-default" value="Ajout du livre en base">
            </div>
        </form>

        <?php
        if(isset($_POST['EnvoieDansBase']))
        {
            $stmt = $_SQL->prepare("SELECT `ID` FROM `manga` WHERE `Nom` = ?");
            $stmt->execute(array($_POST['Nom']));
            $Verif = $stmt->fetch();

            if ($Verif)
            {
                echo $_POST['Nom']." est déjà en base";
            } else 
            {
                if(isset($_POST['Fini']))
                {
                    $Fini = 1;
                } else 
                {
                    $Fini = 0;
                }

                $stmt = $_SQL->prepare("INSERT INTO `manga`(`Nom`, `nbrTome`, `Type`, `Fini`) VALUES (?,?,?,?)");
                $stmt->execute(array($_POST['Nom'], $_POST['nbrTomeParu'], $_POST['TypeLivre'], $Fini));
                $AjoutManga = $stmt->fetch();
            }
        }
        ?>
    </body>
</html>