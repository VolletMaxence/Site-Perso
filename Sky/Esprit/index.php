<html>
    <head>
        <!--Icone : -->
        <link rel="icon" href="../../Icone/Shellos-Icone.ico">
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <title> Site d'un bon Gros Chien - Sky : Children of the Light - Esprit </title>
    </head>
    <body>
        <?php
            include '../../Menu/Menu.php';
        ?>
        <form method=$_POST>
            <select class="Zone" id="Zone">
                <option value="fdsbyyu">--Sélectionner votre Zone--</option>
                <option value="Ile">Île de l’Aube</option>
                <option value="Prairie">Prairie illuminée</option>
                <option value="Foret">Forêt cachée</option>
                <option value="Vallee">Vallée du triomphe</option>
                <option value="Desert">Désert d'or</option>
                <option value="Chambre">Chambre de connaissance</option>
                <option value="Eden">Œil d'Eden</option>
            </select>

            <button type="button" onclick="getSelectValue('Zone')"> Trouve ton Esprit </button>
        </form>

        <!-- Div pour image -->
        <div class="d-flex" height="250px">
            <div id="a" class="float-right"></div>
            <div id="b" class="container col-1 mx-auto d-block"></div>
            <div id="c" class="float-left"></div>
        </div>
        <div class="d-flex" height="250px">
            <div id="d" class="float-right"></div>
            <div id="e" class="container col-1 mx-auto d-block"></div>
            <div id="f"></div>
        </div>
        <div class="d-flex" height="250px">
            <div id="g" class="float-right"></div>
            <div id="h" class="container col-1 mx-auto d-block"></div>
            <div id="i"></div>
        </div>
        <div class="d-flex" height="250px">
            <div id="j" class="float-right"></div>
            <div id="k" class="container col-1 mx-auto d-block"></div>
            <div id="l"></div>
        </div>
        <div class="d-flex" height="250px">
            <div id="m" class="float-right"></div>
            <div id="n" class="container col-1 mx-auto d-block"></div>
            <div id="o"></div>
        </div>
        <div class="d-flex" height="250px">
            <div id="p" class="float-right"></div>
            <div id="q" class="container col-1 mx-auto d-block"></div>
            <div id="r"></div>
        </div>
        <div class="d-flex" height="250px">
            <div id="s" class="float-right"></div>
            <div id="t" class="container col-1 mx-auto d-block"></div>
            <div id="u"></div>
        </div>
        <div class="d-flex" height="250px">
            <div id="v" class="float-right"></div>
            <div id="w" class="container col-1 mx-auto d-block"></div>
            <div id="x"></div>
        </div>
        <div class="d-flex" height="250px">
            <div id="y" class="float-right"></div>
            <div id="z" class="container col-1 mx-auto d-block"></div>
        </div>

        <script src="Esprit.js"></script>


    </body>
</html>